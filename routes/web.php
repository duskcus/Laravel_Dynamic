<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('index');
})->name('about');

Route::get('/services', function () {
    return view('index');
})->name('services');

Route::get('/contact', function () {
    return view('index');
})->name('contact');

// RESOURCES
Route::apiResource('users', UsersController::class);
