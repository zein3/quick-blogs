<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', [ArticleController::class, 'index'])->name('index');
Route::get('/search', [ArticleController::class, 'search'])->name('search');
Route::get('/article/{article:slug}', [ArticleController::class, 'show'])->name('article');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index']);
});

if (env('APP_DEBUG') == 'true') {
    Route::group(['prefix' => 'testing'], function() {
        Route::get('/', function() {
            return view('testing');
        });
    });
}

