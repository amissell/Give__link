<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');

Route::get('/Organizations', function () {
  return view('Organizations.index'); 
})->name('Organizations.index');
Route::get('/Categories', function () {
  return view('Categories.index'); 
})->name('Categories.index');

// Route::get('/organizations/{id}', [OrganizationController::class, 'show'])->name('organizations.show');

Route::get('/events/{event}')->name('events.show');

Route::get('/events', function () {
  return view('events.index');
})->name('events.index');


Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/Donations', function () {
  return view(('Donations.index'));
})->name('Donations.index');

Route::get('/Volnteers', function (){
  return view(('Volunteers.index'));
})->name('Volunteers.index');

Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('password.email');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
