<?php

use Illuminate\Support\Facades\Route;

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