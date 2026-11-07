<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    //Registration Index
    public function registraterIndex()
    {
        return view('layouts.registration');
    }


}
