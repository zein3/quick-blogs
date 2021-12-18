<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;


Route::get('/', [ArticleController::class, 'index']);
Route::get('/article/{article:slug}}', [ArticleController::class, 'show']);


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

