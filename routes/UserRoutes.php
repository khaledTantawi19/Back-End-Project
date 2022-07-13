<?php

use App\Http\Controllers\UserBlogsController;
use App\Http\Controllers\UserRouteController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
// This Routes for User to show his profile or update it
Route::get('/profile', [UserRouteController::class, 'show'])->name('profile.show');
Route::get('/profile/{id}/edit', [UserRouteController::class, 'edit'])->name('edit');
Route::put('/profile/{id}', [UserRouteController::class, 'update'])->name('profile.update');

// This Routes for Blogs of User

Route::get('/blogs', [UserBlogsController::class, 'show'])->name('show.user.blogs');
Route::get('/blogs/create', [UserBlogsController::class, 'create'])->name('create.user.blogs');
Route::post('/blogs', [UserBlogsController::class, 'store'])->name('blog.store.user');
Route::get('/blog/{id}/edit', [UserBlogsController::class, 'edit'])->name('user.blog.edit');
Route::put('/blog/{id}', [UserBlogsController::class, 'update'])->name('user.blog.update');
Route::delete('/blog/{id}', [UserBlogsController::class, 'destroy'])->name('user.blog.destroy');
