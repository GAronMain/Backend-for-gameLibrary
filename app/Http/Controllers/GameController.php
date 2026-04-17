<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Http\Resources\CollectibleResource;
use App\Http\Resources\GameResource;


class GameController extends Controller
{
    public function __construct()
    {
        // Require auth for everything EXCEPT index and show
        $this->middleware('auth:sanctum')->except(['index', 'show', "collectiblesShow"]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GameResource::collection(Game::all())->resolve(); //Kiírja az összes játékot
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        $this->authorize('create', Game::class);
        
        $game = Game::create($request->validated());
        return GameResource::make($game);
    }

    /**
     * Display the specified resource.
     */
    public function show($id) //kesz
    {
        $game = Game::find($id);
        if (!$game) {
            return response()->json([
                "success" => false,
                "message" => "Sajnos nincs ilyen játék az adatbázisunkban"
            ], 404);
        }
        return GameResource::make($game)->resolve();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        $this->authorize('update', $game);

        $game->update($request->validated());
        return GameResource::make($game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $this->authorize('delete', $game);
        
        $game->delete();
        return response()->noContent();
    }

        /**
     * Get all collectibles for a specific game by gameId
     */
    public function collectiblesShow($gameId)
    {
        $game = Game::find($gameId);

        if (!$game) {
            return response()->json([
                "success" => false,
                "message" => "Sajnos nincs ilyen játék az adatbázisunkban"
            ], 404);
        }

        $collectibles = $game->collectibles;   

        return CollectibleResource::collection($collectibles)->resolve(); 
        // vagy ha nincs CollectibleResource-od: return $collectibles;
    }
}
