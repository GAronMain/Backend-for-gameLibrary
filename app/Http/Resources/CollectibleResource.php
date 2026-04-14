<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CollectibleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'game_id'      => $this->game_id,
            'type'         => $this->type,
            'description'  => $this->description,
            'images'       => $this->images,
            'map_location' => $this->map_location,
        ];
    }
}
