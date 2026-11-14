<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use App\Models\Auth\RegistrationModel as RegistrationModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;

class AuthController extends Controller
{
    
    //Registration Index
    public function registraterIndex()
    {
        return view('auth.register');
    }

    //Login Index
    public function loginIndex()
    {
        return view('auth.login');
    }

    public function verificationIndex()
    {
        return view('layouts.verification');
    }


// Registration Process
public function registerProcess(Request $request)
{
    $validated = $request->validate([
        'full_name' => 'required|string|max:100',
        'email' => 'required|email|max:150|unique:account_tbl,email',
        'role' => 'required|in:customer,staff',
        'phone_number' => 'nullable|string|max:20',
        'password' => [
            'required',
            'confirmed',
            Password::min(8)->mixedCase()->numbers()->symbols(),
        ],
        'is_agree_terms_conditions' => 'required|accepted',
    ]);

    // Generate 6-digit OTP
    $otp = (string) random_int(100000, 999999);

    // Create account
    $user = new RegistrationModel();

    $user->full_name = $validated['full_name'];
    $user->email = strtolower($validated['email']);
    $user->phone_number = $validated['phone_number'] ?? null;
    $user->password = Hash::make($validated['password']);
    $user->role = $validated['role'];
    $user->is_agree_terms_conditions = true;
    $user->save_session = false;
    $user->status = false;
    $user->is_verified = false;
    $user->verification_code = $otp;
    $user->save();

  

    // Store pending account ID in session
    session(['pending_verification_account_id' => $user->id]);

   // Send OTP through email
    Mail::to($user->email)->send(new VerifyEmail($otp));

    return redirect()->route('verification-code')
        ->with('success', 'Registration successful! Please check your email for your 6-digit verification code.');
}



// Verify Verification Code
public function verifyCode(Request $request)
{
    $validated = $request->validate([
        'verification_code' => 'required|string|size:6',
    ]);

    // Get the account ID from the session
    $accountId = session('pending_verification_account_id');

    // Find the user
    $user = RegistrationModel::find($accountId);

    // Check if account exists
    if (!$user) {
        return redirect()->route('verification-code')
            ->withErrors(['verification_code' => 'Account not found.']);
    }

    // Check if verification code matches
    if ($user->verification_code !== $validated['verification_code']) {
        return back()->withErrors([
            'verification_code' => 'Invalid verification code. Please try again.'
        ]);
    }

    // Check if verification code has expired
    if ($user->verification_code_expires_at < now()) {
        return back()->withErrors([
            'verification_code' => 'Verification code has expired. Please request a new one.'
        ]);
    }

    // Mark account as verified
    $user->email_verified_at = now();
    $user->verification_code = null;
    $user->save();

    // Clear verification session
    session()->forget('pending_verification_account_id');

    // Redirect after successful verification
    return redirect()->route('login')
        ->with('success', 'Your email has been successfully verified! You can now log in.');
}

}



