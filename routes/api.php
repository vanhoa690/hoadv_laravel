<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::post("/auth/logout", [AuthController::class, 'logout']);

    Route::post("/update/profile", [UserController::class, 'updateProfileImage']);
    Route::apiResources([
        "posts" => PostController::class,
    ]);
});

Route::post("/auth/login", [AuthController::class, 'login']);
Route::post("/auth/register", [AuthController::class, 'register']);
