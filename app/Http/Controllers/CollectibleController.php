<?php

namespace App\Http\Controllers;

use App\Models\Collectible;
use App\Http\Requests\StoreCollectibleRequest;
use App\Http\Requests\UpdateCollectibleRequest;
use App\Http\Resources\CollectibleResource;

class CollectibleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CollectibleResource::collection(Collectible::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCollectibleRequest $request)
    {
        $collectible = Collectible::create($request->validated());
        return CollectibleResource::make($collectible);
    }

    /**
     * Display the specified resource.
     */
    public function show(Collectible $collectible)
    {
        return CollectibleResource::make($collectible)->resolve();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCollectibleRequest $request, Collectible $collectible)
    {
        $collectible->update($request->validated());
        return CollectibleResource::make($collectible);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collectible $collectible)
    {
        $collectible->delete();
        return response()->noContent();
    }
}
