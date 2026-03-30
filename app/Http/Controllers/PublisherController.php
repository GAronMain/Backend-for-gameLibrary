<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Http\Requests\StorePublisherRequest;
use App\Http\Requests\UpdatePublisherRequest;
use App\Http\Resources\PublisherResource;

class PublisherController extends Controller
{
    public function __construct()
    {
        // Require auth for everything EXCEPT index and show
        $this->middleware('auth:sanctum')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PublisherResource::collection(Publisher::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublisherRequest $request)
    {
        $publisher = Publisher::create($request->validated());
        return PublisherResource::make($publisher);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $publisher = Publisher::find($id);

        if (!$publisher) {
            return response()->json([
                "success" => false,
                "message" => "Sajnos nincs ilyen kiado az adatbázisunkban"
            ], 404);
        }
        return PublisherResource::make($publisher)->resolve();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublisherRequest $request, Publisher $publisher)
    {
        $publisher->update($request->validated());
        return PublisherResource::make($publisher);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return response()->noContent();
    }
}
