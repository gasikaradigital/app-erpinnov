<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\CreateEntreprise;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\CreateInstance;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Routes protégées
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/client', [ClientController::class, 'client']);
    Route::post('/entreprise', [CreateEntreprise::class, 'entreprise']);
    Route::get('/plan', [PlanController::class, 'plan']);
    Route::get('/instance', [CreateInstance::class, 'createInstance']);
});
