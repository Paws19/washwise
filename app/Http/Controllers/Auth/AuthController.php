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

}
