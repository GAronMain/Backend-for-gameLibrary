<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Http\Resources\GameResource;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GameResource::collection(Game::all()); //Kiírja az összes játékot
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        // $game = Game::create($request->validated());
        // return response()->json($game, 201);      

        $game = Game::create($request->validated());
        return GameResource::make($game);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return GameResource::make($game);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        $game->update($request->validated());
        return GameResource::make($game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return response()->noContent();
    }
}
