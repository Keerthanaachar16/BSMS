<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/home', function () {
    return view('home');
});
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);

// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
// Route::view('/reset','reset');
// Route::get('/register', function () {
//     return view('register');
// });
Route::view('/login','login');

Route::view('/register','register');

Route::view('/forgot-password','forgot-password');

Route::get('/otp', function () {
    return view('otp');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::view('/profile_edit','profile_edit');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::view('/logout','logout');

Route::view('/add_complaints','add_complaints');

Route::view('/complaints_details1','complaints_details1');

Route::view('/complaint_list','complaint_list');

Route::view('/complaint_details','complaint_details');

Route::view('/check_status','check_status');

Route::view('/card_details','card_details');

Route::view('/admin_login','admin_login');

Route::view('/admin_forgot_password','admin_forgot_password');

Route::view('/admin_otp','admin_otp');

Route::view('/admin_reset','admin_reset');







