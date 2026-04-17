<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class CollectibleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'game_id'     => Game::factory(),
            'type'        => $this->faker->word() . ' Skin',
            'description' => $this->faker->sentence(),
            'images'      => [$this->faker->imageUrl()],
            'map_location' => null,
        ];
    }
}