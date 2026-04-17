<?php

namespace Tests\Feature;

use App\Models\Collectible;
use App\Models\Game;
use App\Models\User;
use Tests\TestCase;

class CollectibleTest extends TestCase
{
    public function test_can_get_all_collectibles()
    {
        $user = User::factory()->create();
        $token = $user->createToken('test')->plainTextToken;

        Collectible::factory(5)->create();

        $response = $this->withToken($token)->getJson('/api/collectibles');

        $response->assertStatus(200);
    }

    public function test_can_create_new_collectible()
    {
        $user = User::factory()->create();
        $token = $user->createToken('test')->plainTextToken;
        $game = Game::factory()->create();

        $response = $this->withToken($token)->postJson('/api/collectibles', [
            'game_id'     => $game->id,
            'type'        => 'Weapon Skin',
            'description' => 'Legendary Viking axe skin for testing.',
            'images'      => ['https://example.com/skin1.jpg'],
            'map_location' => [47.4979, 19.0402],
        ]);

        $response->assertStatus(201);
    }

    public function test_cannot_create_duplicate_type_for_same_game()
    {
        $user = User::factory()->create();
        $token = $user->createToken('test')->plainTextToken;
        $game = Game::factory()->create();

        Collectible::create([
            'game_id'     => $game->id,
            'type'        => 'Unique Skin',
            'description' => 'First',
            'images'      => ['img1.jpg']
        ]);

        $response = $this->withToken($token)->postJson('/api/collectibles', [
            'game_id'     => $game->id,
            'type'        => 'Unique Skin',
            'description' => 'Second',
            'images'      => ['img2.jpg']
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors('type');
    }
}