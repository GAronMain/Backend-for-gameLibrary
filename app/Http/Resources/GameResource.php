<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    public static $wrap = null;   // ez jó, hogy nincs "data" wrapper

    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'release_year'  => $this->release_year,
            'genre'         => $this->genre,
            'publisher_id'  => $this->publisher_id,
            'platforms'     => $this->platforms,
            'cover'         => $this->cover,
            'freetogame_url'=> $this->freetogame_url,
            // Relációk opcionálisan
            'publisher'     => $this->whenLoaded('publisher'),
            'collectibles_count' => $this->whenCounted('collectibles'),
        ];
    }
}