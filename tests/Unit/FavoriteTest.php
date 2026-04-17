<?php

namespace Tests\Feature;

use App\Models\Game;
use App\Models\User;
use Tests\TestCase;

class FavoriteTest extends TestCase
{
    public function test_authenticated_user_can_add_game_to_favorites()
    {
        $user = User::factory()->create();
        $game = Game::factory()->create();
        $token = $user->createToken('test-token')->plainTextToken;

        $response = $this->withToken($token)
                         ->postJson("/api/favorites/{$game->id}");

        $response->assertStatus(201);

        $this->assertDatabaseHas('favorites', [
            'user_id' => $user->id,
            'game_id' => $game->id
        ]);
    }

    public function test_user_cannot_add_same_game_to_favorites_twice()
    {
        $user = User::factory()->create();
        $game = Game::factory()->create();
        $user->favoriteGames()->attach($game->id);

        $token = $user->createToken('test-token')->plainTextToken;

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

        $token = $user->createToken('test-token')->plainTextToken;

        $response = $this->withToken($token)->getJson('/api/favorites');

        $response->assertStatus(200);
    }

    public function test_user_can_remove_game_from_favorites()
    {
        $user = User::factory()->create();
        $game = Game::factory()->create();
        $user->favoriteGames()->attach($game->id);

        $token = $user->createToken('test-token')->plainTextToken;

        $response = $this->withToken($token)
                         ->deleteJson("/api/favorites/{$game->id}");

        $response->assertNoContent();

        $this->assertDatabaseMissing('favorites', [
            'user_id' => $user->id,
            'game_id' => $game->id
        ]);
    }

    public function test_unauthenticated_user_cannot_access_favorites()
    {
        $game = Game::factory()->create();

        $response = $this->postJson("/api/favorites/{$game->id}");
        $response->assertStatus(401);
    }
    public function test_cannot_get_nonexistent_game()
    {
        $response = $this->getJson('/api/games/99999');
        $response->assertStatus(404);
    }

    public function test_game_response_contains_correct_fields()
    {
        $game = Game::factory()->create();

        $response = $this->getJson("/api/games/{$game->id}");

        $response->assertJsonFragment([
            'id' => $game->id,
            'name' => $game->name,
            'release_year' => $game->release_year,
            'genre' => $game->genre,
        ]);
    }
    public function test_favorite_response_contains_game_id_and_user_id()
    {
        $user = User::factory()->create();
        $game = Game::factory()->create();
        $token = $user->createToken('test')->plainTextToken;

        $response = $this->withToken($token)
                         ->postJson("/api/favorites/{$game->id}");

        $response->assertStatus(201)
                 ->assertJsonFragment([
                     'user_id' => $user->id,
                     'game_id' => $game->id
                 ]);
    }

    public function test_user_cannot_add_favorite_without_auth()
    {
        $game = Game::factory()->create();

        $response = $this->postJson("/api/favorites/{$game->id}");
        $response->assertStatus(401);
    }
}