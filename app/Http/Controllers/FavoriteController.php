<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use App\Http\Resources\FavoriteResource;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $favorites = Favorite::where('user_id', auth()->id())->get();

        if ($favorites->isEmpty()) {
            return response()->json(['message' => 'Még nincs kedvenc játékod.'], 200);
        }

        return FavoriteResource::collection($favorites)->resolve();
    }

    public function store(StoreFavoriteRequest $request, $gameId)
    {
        $this->authorize('create', Favorite::class);

        $userId = Auth::id();

        $favorite = Favorite::create([
            'user_id' => $userId,
            'game_id' => $gameId
        ]);

        return (new FavoriteResource($favorite))
            ->response()
            ->setStatusCode(201);
    }

    public function show($gameId)
    {
        $favorite = Favorite::where('user_id', auth()->id())
            ->where('game_id', $gameId)
            ->first();

        if (!$favorite) {
            return response()->json([
                'message' => 'Ez a játék nincs a kedvenceid között.'
            ], 404);
        }

        return new FavoriteResource($favorite);
    }


    public function destroy($gameId)
    {
        $deleted = Favorite::where('user_id', auth()->id())
            ->where('game_id', $gameId)
            ->delete();

        if (!$deleted) {
            return response()->json(['message' => 'Ez a játék nem volt a kedvenceid között.'], 404);
        }

        return response()->noContent();
    }

    public function adminIndex($userId)
    {
        $favorites = Favorite::where('user_id', $userId)
            ->with('game')
            ->get();

        return FavoriteResource::collection($favorites);
    }
}
