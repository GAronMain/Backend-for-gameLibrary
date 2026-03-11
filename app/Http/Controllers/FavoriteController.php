<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use App\Http\Resources\FavoriteResource;

class FavoriteController extends Controller
{
    public function index()
    {
        return FavoriteResource::collection(Favorite::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFavoriteRequest $request)
    {
        $favorite = Favorite::create($request->validated());
        return FavoriteResource::make($favorite);
    }

    /**
     * Display the specified resource.
     */

    // public function show($gameId)
    // {
    //     $favorite = Favorite::where('user_id', auth()->id())
    //         ->where('game_id', $gameId)
    //         ->firstOrFail();

        
    //     return new FavoriteResource($favorite->toArray());
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoriteRequest $request, Favorite $favorite)
    {   
        $favorite->update($request->validated());
        return FavoriteResource::make($favorite);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorite $favorite)
    {
        $favorite->delete();
        return response()->noContent();
    }
}
