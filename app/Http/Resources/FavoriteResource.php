<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        // Explicitly return only the columns you actually have
        return [
            'user_id' => $this->user_id,
            'game_id' => $this->game_id,
            // If you want to include the game details too:
            // 'game' => new GameResource($this->whenLoaded('game')),
        ];
    }
}
