<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SocialAuthFacebookController;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $blogs = Blog::all();
    if (Auth::user()) {
        $user = Auth::user();
        return view('welcome', ['blogs' => $blogs], ['user' => $user]);
    }
    return view('welcome', ['blogs' => $blogs]);
})->name('welcome');


// Auth FaceBook routes
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [SocialAuthFacebookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [SocialAuthFacebookController::class, 'callbackFromFacebook'])->name('callback');
});

// Search Route
Route::get('/search',[BlogController::class, 'search'])->name('search.menu');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

