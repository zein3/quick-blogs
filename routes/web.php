<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\PasswordController;



Route::get('/', [ArticleController::class, 'index'])->name('index');
Route::get('/search', [ArticleController::class, 'search'])->name('search');
Route::get('/article/{article:slug}', [ArticleController::class, 'show'])->name('article');



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);



Route::group(['prefix' => '/email', 'middleware' => 'auth'], function() {
    Route::get('/verify', [EmailVerificationController::class, 'show'])
        ->name('verification.notice');
    Route::get('/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
        ->middleware('signed')
        ->name('verification.verify');
    Route::post('/send-verification', [EmailVerificationController::class, 'send'])
        ->middleware('throttle:6,1')
        ->name('verification.send');
});



Route::get('/forgot-password', [PasswordController::class, 'request'])
    ->middleware('guest')
    ->name('password.request');
Route::post('/forgot-password', [PasswordController::class, 'email'])
    ->middleware('guest')
    ->name('password.email');
Route::get('/reset-password/{token}', [PasswordController::class, 'reset'])
    ->middleware('guest')
    ->name('password.reset');
Route::post('/reset-password', [PasswordController::class, 'update'])
    ->middleware('guest')
    ->name('password.update');



Route::group(['prefix' => '/dashboard', 'middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});



if (env('APP_DEBUG') == 'true') {
    Route::group(['prefix' => 'testing'], function() {
        Route::get('/', function() {
            return view('testing');
        });
    });
}

