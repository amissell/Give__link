<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;


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


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/Donors', function () {
  return view(('Donors.index'));
})->name('Donors.index');