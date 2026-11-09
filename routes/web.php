<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'registraterIndex'])->name('register');
Route::get('/login', [App\Http\Controllers\Auth\AuthController::class, 'loginIndex'])->name('login');
Route::get('/verification-code', [App\Http\Controllers\Auth\AuthController::class, 'verificationIndex'])->name('verification-code');

Route::post('/register', [App\Http\Controllers\Auth\AuthController::class, 'registerProcess'])->name('register.store');