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


//Public Routes
Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);

Route::apiResource("games", GameController::class);
Route::apiResource("publishers", PublisherController::class);
Route::apiResource("collectibles", CollectibleController::class);
Route::get('games/{gameId}/collectibles', [GameController::class, 'collectibles']);

//Protected Routes
Route::middleware("auth:sanctum")->group(function () {
    Route::post("logout", [AuthController::class, "logout"]);

    Route::get("favorites", [FavoriteController::class, "index"]);
    Route::get("favorites/{gameId}", [FavoriteController::class, "show"]);
    Route::post("favorites/{gameId}", [FavoriteController::class, "store"]);
    Route::delete("favorites/{gameId}", [FavoriteController::class, "destroy"]);
    Route::get("favorites/{gameId}", [FavoriteController::class, "show"]);
});
