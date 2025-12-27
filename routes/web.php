<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Media;
use App\Models\PortfolioItem;

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

// Portfolio page route
Route::get('/portfolio', function () {
    // Get portfolio items from database, ordered by display_order
    $portfolioItems = PortfolioItem::orderBy('display_order')->get();
    
    return view('portfolio', [
        'portfolioItems' => $portfolioItems,
    ]);
})->name('portfolio');

// Admin login routes (no middleware - accessible to all)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.post');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});

// Admin routes (protected by authentication)
Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/media', [AdminController::class, 'create'])->name('media.create');
    Route::post('/media', [AdminController::class, 'store'])->name('media.store');
    Route::delete('/media/section/{section}', [AdminController::class, 'destroy'])->name('media.destroy');
    
    // Portfolio item routes
    Route::post('/portfolio-items', [AdminController::class, 'storePortfolioItem'])->name('portfolio-items.store');
    Route::delete('/portfolio-items/{id}', [AdminController::class, 'destroyPortfolioItem'])->name('portfolio-items.destroy');
});

