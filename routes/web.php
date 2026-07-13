<?php

use Illuminate\Support\Facades\Route;

// Route untuk Landing Page
Route::get('/', function () {
    return view('landing');
})->name('home');

// Route untuk Halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route untuk Halaman Services (TAMBAHAN BARU)
Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/carbontalk', function () {
    return view('carbontalk');
})->name('carbontalk');

// Route untuk Halaman Contact (TAMBAHAN BARU)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');