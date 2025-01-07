<?php

use Illuminate\Support\Facades\Route;

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