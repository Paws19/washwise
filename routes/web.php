<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'registraterIndex'])->name('register');