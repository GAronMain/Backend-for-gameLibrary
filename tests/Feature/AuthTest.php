<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

beforeEach(function () {
    // $this->seed();   // ← ezt ideiglenesen kikapcsoljuk, mert még nincs DatabaseSeeder
});

test('user can register successfully', function () {
    $response = $this->postJson('/api/register', [
        'name'                  => 'Test User',
        'email'                 => 'testuser@example.com',
        'password'              => 'password123',
        'password_confirmation' => 'password123',
    ]);

    $response->assertStatus(201)
             ->assertJsonStructure(['message', 'user', 'token'])
             ->assertJsonFragment(['message' => 'User registered successfully']);

    $this->assertDatabaseHas('users', ['email' => 'testuser@example.com']);
});

test('user can login with correct credentials', function () {
    User::factory()->create([
        'email'    => 'login@example.com',
        'password' => Hash::make('password123')
    ]);

    $response = $this->postJson('/api/login', [
        'email'    => 'login@example.com',
        'password' => 'password123'
    ]);

    $response->assertStatus(201)
             ->assertJsonStructure(['user', 'token']);
});

test('user cannot login with wrong credentials', function () {
    User::factory()->create(['email' => 'wrong@example.com']);

    $response = $this->postJson('/api/login', [
        'email'    => 'wrong@example.com',
        'password' => 'wrongpassword'
    ]);

    $response->assertStatus(401)
             ->assertJson(['message' => 'Credentials do not match']);
});

test('authenticated user can logout', function () {
    $user = User::factory()->create();
    $token = $user->createToken('test-token')->plainTextToken;

    $response = $this->withToken($token)->postJson('/api/logout');

    $response->assertStatus(201)
             ->assertJson(['message' => 'Succesfully logged out']);
});

test('authenticated user can get own profile with /me', function () {
    $user = User::factory()->create([
        'name'  => 'Aron Tester',
        'email' => 'aron@test.com'
    ]);

    $token = $user->createToken('test')->plainTextToken;

    $response = $this->withToken($token)->getJson('/api/me');

    $response->assertStatus(200)
             ->assertJson([
                 'id'    => $user->id,
                 'name'  => 'Aron Tester',
                 'email' => 'aron@test.com'
             ]);
});