<?php

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
Route::get('/categories', function () {
    return view('categories');
});