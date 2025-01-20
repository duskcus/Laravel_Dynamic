<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/api', function () {
    return view('api.index');
})->name('api');

Route::get('/form', function () {
    return view('form.index');
})->name('form');

Route::get('/loader', function () {
    return view('loader.index');
})->name('loader');

Route::get('/popup', function () {
    return view('popup.index');
})->name('popup');

Route::get('/stepper', function () {
    return view('stepper.index');
})->name('stepper');

Route::get('/toast', function () {
    return view('toast.index');
})->name('toast');

Route::get('/placeholder', function () {
    return ('Has not been developed yet...');
})->name('placeholder');

// RESOURCES
Route::apiResource('users', UsersController::class);