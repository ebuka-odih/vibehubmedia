<?php

use Illuminate\Support\Facades\Route;

// Index route - serves the converted index.php as a Blade view
Route::get('/', function () {
    return view('index');
});

