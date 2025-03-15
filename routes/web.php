<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::post('/register-post', [AuthController::class, 'register']);
Route::post('/login-post', [AuthController::class, 'login'])->name('login');
