<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/makeup', [HomeController::class, 'makeup'])->name('makeup');
// Route::get('/box', [HomeController::class, 'box'])->name('box');
// Route::get('/attire', [HomeController::class, 'attire'])->name('attire');
// Route::get('/farm', [HomeController::class, 'farm'])->name('farm');
// Route::get('/link', [HomeController::class, 'link'])->name('link');
Route::get('/category/{slug}', [HomeController::class, 'category'])->name('category');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    // Dashboard
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Product
    Route::resource('product', AdminProductController::class);

    // Category
    Route::resource('category', AdminCategoryController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
