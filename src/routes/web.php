<?php

use App\Http\Controllers\GeneralWebsiteController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use Auth0\Login\Auth0Controller;
use App\Http\Controllers\Auth\Auth0IndexController;
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

Route::get('/VWS', [GeneralWebsiteController::class, 'index'])->name('index');
Route::get('/VWS/about', [GeneralWebsiteController::class, 'about'])->name('about');
Route::get('/VWS/dashboard', [GeneralWebsiteController::class, 'dashboard'])->name('dashboard');

Route::get('/VWS/about', function(){
    return view('aboutpage');
});

Route::get('/VWS/landing', function(){
    return view('landing');
});
Route::get('/VWS/auth0/callback', [Auth0Controller::class, 'callback'])->name('auth0-callback');
Route::get('/VWS/login', [Auth0IndexController::class, 'login'])->name('login');
Route::get('/VWS/logout', [Auth0IndexController::class, 'logout'])->name('logout');
Route::get('/VWS/profile', [Auth0IndexController::class, 'profile'])->name('profile');

