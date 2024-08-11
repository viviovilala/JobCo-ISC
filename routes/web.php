<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', function () {
    return view('home');
});

// Route untuk halaman e-learning
Route::get('/elearning', function () {
    return view('elearning');
});

// Route untuk halaman discuss
Route::get('/discuss', function () {
    return view('discuss');
});

// Route untuk halaman mentoring
Route::get('/mentoring', function () {
    return view('mentoring');
});

// Route untuk halaman sign-in
Route::get('/sign-in', function () {
    return view('signin');
});

// Route untuk halaman sign-up
Route::get('/sign-up', function () {
    return view('signup');
});
