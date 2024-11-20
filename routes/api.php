<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::post("/auth/logout", [AuthController::class, 'logout']);

    // Route::post("/update/profile", [UserController::class, 'updateProfileImage']);
});

Route::post("/auth/login", [AuthController::class, 'login']);
Route::post("/auth/register", [AuthController::class, 'register']);
