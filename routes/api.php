<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollectibleController;
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


//Protected Routes = working
Route::middleware("auth:sanctum")->group(function () {
    Route::post("logout", [AuthController::class, "logout"]);
});


//Protected Routes = still in progress
Route::apiResources([
    "games" => GameController::class,
    "publishers" => PublisherController::class,
    "collectibles" => CollectibleController::class
]);
