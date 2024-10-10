<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

// route for admin role only
Route::middleware('auth', 'verified', 'admin')->group(function () {
    Route::get('/admin/dashboard', [PostController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::resource('posts', PostController::class)->except(['show']);
});






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});









require __DIR__.'/auth.php';
