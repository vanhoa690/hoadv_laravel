<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('index');

Route::get('/anime-details', function () {
    return view('anime-details');
});
Route::get('/anime-watching', function () {
    return view('anime-watching');
});

Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);


Route::get('/blog-detail', function () {
    return view('blog-detail');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::controller(CategoryController::class)
    ->prefix('categories')
    ->name('categories.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{category}', 'show')->name('show');
        Route::get('/{category}/watching', 'watching')->name('watching');
    });
