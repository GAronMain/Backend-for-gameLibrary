<?php

namespace Database\Seeders;

use App\Models\Collectible;
use App\Models\Game;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Publishers
        Publisher::create(['id' => 1, 'name' => 'Ubisoft', 'headquarters' => 'Montreuil, France', 'is_active' => 1]);
        Publisher::create(['id' => 2, 'name' => 'Electronic Arts', 'headquarters' => 'Redwood City, California, USA', 'is_active' => 1]);
        Publisher::create(['id' => 3, 'name' => 'Valve Corporation', 'headquarters' => 'Bellevue, Washington, USA', 'is_active' => 1]);
        Publisher::create(['id' => 4, 'name' => 'RustBelt', 'headquarters' => 'United Kingdom', 'is_active' => 1]);

        // Users
        User::create([
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'registered_at' => '2024-01-15 10:00:00'
        ]);

        User::create([
            'id' => 2,
            'name' => 'Anna Smith',
            'email' => 'anna@example.com',
            'password' => Hash::make('password'),
            'registered_at' => '2023-11-02 15:30:00'
        ]);

        User::create([
            'id' => 3,
            'name' => 'Aron',
            'email' => 'aron@example.com',
            'password' => Hash::make('password'),
            'registered_at' => '2025-01-15 09:16:00'
        ]);

        // Games
        Game::create([
            'id' => 1,
            'name' => "Assassin's Creed Valhalla",
            'release_year' => 2020,
            'genre' => 'Action RPG',
            'publisher_id' => 1,
            'platforms' => ["PC", "PS5", "Xbox Series X"],
            'cover' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/ff/Assassin%27s_Creed_Valhalla_cover.jpg/250px-Assassin%27s_Creed_Valhalla_cover.jpg',
            'freetogame_url' => null,
        ]);

        Game::create([
            'id' => 2,
            'name' => 'Apex Legends',
            'release_year' => 2019,
            'genre' => 'Battle Royale',
            'publisher_id' => 2,
            'platforms' => ["PC", "PS4", "Xbox One", "Switch"],
            'cover' => 'https://upload.wikimedia.org/wikipedia/en/d/db/Apex_legends_cover.jpg',
            'freetogame_url' => 'https://www.freetogame.com/apex-legends',
        ]);

        Game::create([
            'id' => 3,
            'name' => 'Counter-Strike 2',
            'release_year' => 2023,
            'genre' => 'FPS',
            'publisher_id' => 3,
            'platforms' => ["PC"],
            'cover' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f2/CS2_Cover_Art.jpg/250px-CS2_Cover_Art.jpg',
            'freetogame_url' => null,
        ]);

        Game::create([
            'id' => 4,
            'name' => 'Arc Raiders',
            'release_year' => 2025,
            'genre' => 'Extraction Shooter',
            'publisher_id' => 4,
            'platforms' => ["PC", "PS5"],
            'cover' => null,
            'freetogame_url' => null,
        ]);

        // Favorites
        $john = User::find(1);
        $anna = User::find(2);

        $john->favoriteGames()->attach([1, 3]);
        $anna->favoriteGames()->attach([2]);

        // Collectibles (opcionális, de ajánlott)
        Collectible::create([
            'game_id' => 1,
            'type' => 'Weapon Skin',
            'description' => 'Legendary Viking Axe skin',
            'images' => ['https://example.com/axe1.jpg', 'https://example.com/axe2.jpg'],
            'map_location' => [59.9139, 10.7522],
        ]);
    }
}