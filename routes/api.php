<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\Api\UserController;



Route::middleware(['auth:sanctum', 'role:admin'])->get('/admin', function () {
    return response()->json(['message' => 'welcome admin!']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'role:admin'])->delete('/users/{id}', [UserController::class, 'destroy']);
Route::middleware(['auth:sanctum'])->put('/profile', [AuthController::class, 'updateProfile']);

Route::middleware(['auth:sanctum', 'role:admin'])->get('/users', [UserController::class, 'index']);
