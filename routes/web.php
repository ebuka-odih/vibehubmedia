<?php

use Illuminate\Support\Facades\Route;

// Index route - serves the converted index.php as a Blade view
Route::get('/', function () {
    return view('index');
})->name('home');

// Contact page route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// About page route
Route::get('/about', function () {
    return view('about');
})->name('about');

