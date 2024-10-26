<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ProfileController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    // Route::patch('/profile/{profile}', [ProfileController::class, 'update']);
    Route::apiResource('profiles', ProfileController::class);

    // Route::apiResource('posts', PostController::class);
});
Route::apiResource('categories', CategoryController::class);
Route::apiResource('posts', PostController::class);
