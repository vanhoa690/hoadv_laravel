<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
});

Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('movies', MovieController::class)->names('movies');
