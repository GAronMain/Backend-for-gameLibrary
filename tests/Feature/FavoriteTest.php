<?php

use App\Models\Game;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->game = Game::factory()->create();
});

test('authenticated user can add game to favorites', function () {
    $token = $this->user->createToken('test')->plainTextToken;

    $response = $this->withHeader('Authorization', "Bearer $token")
                     ->postJson("/api/favorites/{$this->game->id}");

    $response->assertStatus(201);

    $this->assertDatabaseHas('favorites', [
        'user_id' => $this->user->id,
        'game_id' => $this->game->id
    ]);
});

test('user cannot add same game to favorites twice', function () {
    $this->user->favoriteGames()->attach($this->game->id);

    $token = $this->user->createToken('test')->plainTextToken;

    $response = $this->withHeader('Authorization', "Bearer $token")
                     ->postJson("/api/favorites/{$this->game->id}");

    // Attól függően, hogy van-e unique constraint vagy a request validation kezeli
    $response->assertStatus(422); // vagy 409 ha te kezeled
});

test('user can view own favorites', function () {
    $this->user->favoriteGames()->attach($this->game->id);

    $token = $this->user->createToken('test')->plainTextToken;

    $response = $this->withHeader('Authorization', "Bearer $token")
                     ->getJson('/api/favorites');

    $response->assertStatus(200);
});

test('user can remove game from favorites', function () {
    $this->user->favoriteGames()->attach($this->game->id);

    $token = $this->user->createToken('test')->plainTextToken;

    $response = $this->withHeader('Authorization', "Bearer $token")
                     ->deleteJson("/api/favorites/{$this->game->id}");

    $response->assertNoContent();

    $this->assertDatabaseMissing('favorites', [
        'user_id' => $this->user->id,
        'game_id' => $this->game->id
    ]);
});

test('unauthenticated user cannot access favorites', function () {
    $response = $this->postJson("/api/favorites/1");
    $response->assertStatus(401);
});