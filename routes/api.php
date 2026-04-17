<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollectibleController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublisherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// ====================== PUBLIC ROUTES ======================
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::apiResource('games', GameController::class);
Route::apiResource('publishers', PublisherController::class);
Route::apiResource('collectibles', CollectibleController::class);

// Egyedi route a game collectibles-hoz
Route::get('games/{gameId}/collectibles', [GameController::class, 'collectiblesShow']);

// ====================== PROTECTED ROUTES ======================
Route::middleware('auth:sanctum')->group(function () {

    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    // Favorites
    Route::get('favorites', [FavoriteController::class, 'index']);
    Route::post('favorites/{gameId}', [FavoriteController::class, 'store']);
    Route::get('favorites/{gameId}', [FavoriteController::class, 'show']);
    Route::delete('favorites/{gameId}', [FavoriteController::class, 'destroy']);
});