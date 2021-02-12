<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('aboutpage');
});

Route::get('/landing', function(){
    return view('landing');
});

Route::get('/surveyO', function(){
    return view('surveyAppendixO');
});

Route::get('/surveyR', function(){
    return view('surveyAppendixR');
});

Route::get('/surveyT', function(){
    return view('surveyAppendixT');
});

Route::get('/surveyS', function(){
    return view('surveyAppendixS');
});

Route::get('/surveyQ', function(){
    return view('surveyAppendixQ');
});

Route::get('/auth0/callback', [Auth0Controller::class, 'callback'])->name('auth0-callback');
Route::get('/login', [Auth0IndexController::class, 'login'])->name('login');
Route::get('/logout', [Auth0IndexController::class, 'logout'])->name('logout');
Route::get('/profile', [Auth0IndexController::class, 'profile'])->name('profile');
Route::get('/survey-O', function(){
    return view('surveyAppendixO');
});

