<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->user_id,
            'game_id' => $this->game_id,
            // Ha szeretnéd mutatni a játék adatait is (opcionális, de szép)
            'game' => $this->whenLoaded('game', function () {
                return [
                    'id'   => $this->game->id,
                    'name' => $this->game->name,
                ];
            }),
        ];
    }
}