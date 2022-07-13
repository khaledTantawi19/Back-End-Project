<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AdminController::class, 'index'])->name('index');
Route::resource('user', UserController::class); //->middleware(App\Http\Middleware\ModeratorMiddleware::class);
Route::resource('blog', BlogController::class);

Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware(App\Http\Middleware\ModeratorMiddleware::class);
Route::delete('destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware(App\Http\Middleware\ModeratorMiddleware::class);
