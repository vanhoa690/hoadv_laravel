<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('index');

Route::get('/anime-details', function () {
    return view('anime-details');
});

Route::get('/categories', function () {
    return view('categories');
});
