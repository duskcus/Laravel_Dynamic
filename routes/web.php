<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/placeholder', function () {
    return ('placeholder route');
})->name('placeholder');

// RESOURCES
Route::apiResource('users', UsersController::class);
