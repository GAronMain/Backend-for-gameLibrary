<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PublisherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::apiResource("games", GameController::class);
// Route::apiResource("publishers", PublisherController::class);

Route::apiResources([
    "games" => GameController::class,
    "publishers" => PublisherController::class
    ]);