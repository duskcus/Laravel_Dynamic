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

Route::get('/placeholder', function () {
    return ('placeholder route');
})->name('placeholder');

// RESOURCES
Route::apiResource('users', UsersController::class);
