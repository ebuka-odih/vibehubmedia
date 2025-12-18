<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Media;

// Index route - serves the converted index.php as a Blade view
Route::get('/', function () {
    // Get active media for each section (1-6)
    $sectionMedia = [];
    for ($i = 1; $i <= 6; $i++) {
        $sectionMedia[$i] = Media::where('section', $i)
            ->where('is_active', true)
            ->latest()
            ->first();
    }
    
    return view('index', [
        'sectionMedia' => $sectionMedia,
    ]);
})->name('home');

// Contact page route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// About page route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/media', [AdminController::class, 'create'])->name('media.create');
    Route::post('/media', [AdminController::class, 'store'])->name('media.store');
    Route::delete('/media/section/{section}', [AdminController::class, 'destroy'])->name('media.destroy');
});

