<?php

namespace Tests\Feature;

use App\Models\Game;
use App\Models\User;
use Tests\TestCase;

class FavoriteTest extends TestCase
{
    public function test_authenticated_user_can_add_favorite()
    {
        $user = User::factory()->create();
        $game = Game::factory()->create();
        $token = $user->createToken('test')->plainTextToken;

        $response = $this->withToken($token)
                         ->postJson("/api/favorites/{$game->id}");

        $response->assertStatus(201);

        $this->assertDatabaseHas('favorites', [
            'user_id' => $user->id,
            'game_id' => $game->id
        ]);
    }

    public function test_user_cannot_add_same_game_twice()
    {
        $user = User::factory()->create();
        $game = Game::factory()->create();
        $user->favoriteGames()->attach($game->id);

        $token = $user->createToken('test')->plainTextToken;

        $response = $this->withToken($token)
                         ->postJson("/api/favorites/{$game->id}");

        $response->assertStatus(422)
                 ->assertJsonValidationErrors('game_id');
    }

    public function test_user_can_view_own_favorites()
    {
        $user = User::factory()->create();
        $game = Game::factory()->create();
        $user->favoriteGames()->attach($game->id);

        $token = $user->createToken('test')->plainTextToken;

        $response = $this->withToken($token)->getJson('/api/favorites');

        $response->assertStatus(200);
    }

    public function test_user_can_remove_favorite()
    {
        $user = User::factory()->create();
        $game = Game::factory()->create();
        $user->favoriteGames()->attach($game->id);

        $token = $user->createToken('test')->plainTextToken;

        $response = $this->withToken($token)
                         ->deleteJson("/api/favorites/{$game->id}");

        $response->assertNoContent();

        $this->assertDatabaseMissing('favorites', [
            'user_id' => $user->id,
            'game_id' => $game->id
        ]);
    }
}