<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /** @use HasFactory<\Database\Factories\GameFactory> */
    use HasFactory;

    protected $fillable = [
        "name",
        "release_year",
        "genre",
        "publisher_id",
        "platforms",
        "cover",
        "freetogame_url"
    ];

    protected $casts = [
        "platforms" => "json",   // ← This is the key change!
        // or 'json-array' if you specifically want array (not Collection)
        // 'platforms' => 'json-array',
    ];

}
