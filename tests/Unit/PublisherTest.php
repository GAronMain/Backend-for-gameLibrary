<?php

namespace Tests\Feature;

use App\Models\Publisher;
use App\Models\User;
use Tests\TestCase;

class PublisherTest extends TestCase
{
    public function test_can_get_all_publishers()
    {
        Publisher::factory(4)->create();

        $response = $this->getJson('/api/publishers');

        $response->assertStatus(200);
    }

    public function test_can_create_new_publisher()
    {
        $user = User::factory()->create();
        $token = $user->createToken('test')->plainTextToken;

        $response = $this->withToken($token)->postJson('/api/publishers', [
            'name'         => 'Test Studio',
            'headquarters' => 'Budapest, Hungary',
            'is_active'    => 1,
        ]);

        $response->assertStatus(201);
    }

    public function test_cannot_create_publisher_with_duplicate_name()
    {
        $user = User::factory()->create();
        $token = $user->createToken('test')->plainTextToken;

        Publisher::create(['name' => 'Duplicate Studio']);

        $response = $this->withToken($token)->postJson('/api/publishers', [
            'name' => 'Duplicate Studio'
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors('name');
    }
    public function test_can_update_publisher()
    {
        $user = User::factory()->create();
        $token = $user->createToken('test')->plainTextToken;
        $publisher = Publisher::factory()->create();

        $response = $this->withToken($token)->putJson("/api/publishers/{$publisher->id}", [
            'name' => 'Updated Studio Name'
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('publishers', ['name' => 'Updated Studio Name']);
    }
}