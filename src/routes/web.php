<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralWebsiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', [GeneralWebsiteController::class, 'index'])->name('index');
Route::get('/about', [GeneralWebsiteController::class, 'about'])->name('about');
Route::get('/dashboard', [GeneralWebsiteController::class, 'dashboard'])->name('dashboard');

Route::get('/landing', function(){
    return view('landing');
});

Route::get('/surveyO', function(){
    return view('surveyAppendixO');
});

Route::get('/surveyR', function(){
    return view('surveyAppendixR');
});

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
