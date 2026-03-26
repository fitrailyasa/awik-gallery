<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/makeup', [HomeController::class, 'makeup'])->name('makeup');

Route::get('/box', [HomeController::class, 'box'])->name('box');

Route::get('/attire', [HomeController::class, 'attire'])->name('attire');

Route::get('/farm', [HomeController::class, 'farm'])->name('farm');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/link', [HomeController::class, 'link'])->name('link');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
