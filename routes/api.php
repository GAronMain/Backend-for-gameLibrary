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


//Protected Routes = working
Route::middleware("auth:sanctum")->group(function () {
    Route::post("logout", [AuthController::class, "logout"]);
    
    //ez meg nem mukodik, rossz ugy ahogy van
    Route::get("favorites", [FavoriteController::class, "index"]);      // List all my favorites
    Route::get("favorites/{gameId}", [FavoriteController::class, "show"]); // Check specific game
    Route::post("favorites/{gameId}", [FavoriteController::class, "store"]); // Add to favorites
    Route::delete("favorites/{gameId}", [FavoriteController::class, "destroy"]); // Remove
});


