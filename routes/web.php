<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;



Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard')->middleware('auth');

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

//store comment
Route::post('/comments/{id}', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');
//delete comment
Route::delete('/comments/{id}', [CommentController::class, 'delete'])->name('comments.delete')->middleware('auth');






require __DIR__.'/auth.php';
