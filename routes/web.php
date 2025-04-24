<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Organization\OrganizationDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Organization\EventController;
use App\Http\Controllers\Organization\DonationController;

Route::middleware(['auth', 'role:admin'])->prefix('dashboard')->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
  Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
  Route::get('/categories/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
  Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
  Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
  Route::patch('/organizations/{id}/accept', [OrganizationController::class, 'accept'])->name('admin.organizations.accept');
  Route::patch('/organizations/{id}/reject', [OrganizationController::class, 'reject'])->name('admin.organizations.reject');
  Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
  Route::get('/admin/users/{user}', [UserController::class,'show'])->name('admin.users.show');
  Route::get('/admin/users/{id}/toggle-status', [UserController::class, 'toggleStatus'])->name('admin.users.toggleStatus');

  Route::get('organizations/manage', [OrganizationController::class, 'adminIndex'])->name('organizations.manage');
  Route::patch('organizations/{id}', [OrganizationController::class, 'update'])->name('organizations.update');
  Route::get('organizations/{id}', [OrganizationController::class, 'show'])->name('organizations.show');

});

// Public routes
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::view('/causes', 'causes')->name('causes');
Route::view('/about', 'about')->name('about');
Route::get('/events', function () {
    return view('events');
})->name('events');
Route::get('/organisations', function () {
    return view('organisations');
})->name('organisations');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form'); // GET route to display form
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Password reset routes
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('password.email');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');

// Donations and Volunteers routes
Route::get('/Donations', function () {
    return view('Donations.index');
})->name('Donations.index');

Route::get('/Volnteers', function () {
    return view('Volunteers.index');
})->name('Volunteers.index');

Route::get('/organization/waiting', function () {
    return view('organizations.waiting');
})->name('organizations.waiting');

Route::middleware(['auth', 'role:organization'])->group(function () {
    Route::get('/organizations/create', [OrganizationController::class, 'create'])->name('organizations.create');
    Route::post('/organizations', [OrganizationController::class, 'store'])->name('organizations.store');
});


Route::get('/organization/thank-you', function () {
    return view('organizations.thankyou');
})->name('organizations.thankyou');


Route::middleware(['auth', 'role:organization'])->group(function () {
    Route::get('/organizations/dashboard', [OrganizationDashboardController::class, 'dashboard'])->name('organizations.dashboard');

    Route::resource('events', EventController::class);
     Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
     Route::post('/events', [EventController::class, 'store'])->name('events.store');
     Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
     Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
     Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::post('/donation', [DonationController::class, 'store'])->name('donations.store');
});
