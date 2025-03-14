<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Auth\ForgotPasswordController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');

Route::get('/campaigns', function () {
  return view('campaigns.index'); 
})->name('campaigns.index');

Route::get('/events', function () {
  return view('events.index');
})->name('events.index');


Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/Donors', function () {
  return view(('Donors.index'));
})->name('Donors.index');

Route::get('/Volnteers', function (){
  return view(('Volunteers.index'));
})->name('Volunteers.index');

Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('password.email');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');
