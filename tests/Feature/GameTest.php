<?php

use App\Models\Game;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('can get list of all games', function () {
    Game::factory(5)->create();

    $response = $this->getJson('/api/games');

    $response->assertStatus(200)
             ->assertJsonStructure([
                 'data' => [
                     '*' => ['id', 'name', 'release_year', 'genre', 'platforms', 'cover']
                 ]
             ]);
});

test('can get single game by id', function () {
    $game = Game::factory()->create();

    $response = $this->getJson("/api/games/{$game->id}");

    $response->assertStatus(200)
             ->assertJsonFragment([
                 'id'   => $game->id,
                 'name' => $game->name
             ]);
});

test('can get collectibles of a game', function () {
    $game = Game::factory()->create();
    $game->collectibles()->createMany([
        ['type' => 'Weapon Skin', 'description' => 'Test skin 1', 'images' => ['img1.jpg']],
        ['type' => 'Character Skin', 'description' => 'Test skin 2', 'images' => ['img2.jpg']]
    ]);

    $response = $this->getJson("/api/games/{$game->id}/collectibles");

    $response->assertStatus(200)
             ->assertJsonCount(2); // ha a controller tömböt ad vissza
});