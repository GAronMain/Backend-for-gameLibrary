<?php

namespace Tests\Feature;

use App\Models\Collectible;
use App\Models\Game;
use Tests\TestCase;

class GameTest extends TestCase
{
    public function test_can_get_all_games()
    {
        Game::factory(5)->create();

        $response = $this->getJson('/api/games');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => ['id', 'name', 'release_year', 'genre', 'platforms', 'cover']
                 ]);
    }

    public function test_can_get_single_game()
    {
        $game = Game::factory()->create();

        $response = $this->getJson("/api/games/{$game->id}");

        $response->assertStatus(200)
                 ->assertJsonFragment([
                     'id'   => $game->id,
                     'name' => $game->name
                 ]);
    }

    public function test_can_get_collectibles_of_a_game()
    {
        $game = Game::factory()->create();

        // Explicit módon hozzuk létre a collectible-t minden mezővel
        Collectible::create([
            'game_id'     => $game->id,
            'type'        => 'Weapon Skin',
            'description' => 'Test skin 1',
            'images'      => ['https://example.com/img1.jpg'],
            'map_location' => null,
        ]);

        Collectible::create([
            'game_id'     => $game->id,
            'type'        => 'Character Skin',
            'description' => 'Test skin 2',
            'images'      => ['https://example.com/img2.jpg'],
            'map_location' => null,
        ]);

        $response = $this->getJson("/api/games/{$game->id}/collectibles");

        $response->assertStatus(200)
                 ->assertJsonCount(2)
                 ->assertJsonFragment(['type' => 'Weapon Skin']);
    }
}

