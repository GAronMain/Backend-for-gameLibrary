<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collectible extends Model
{
    /** @use HasFactory<\Database\Factories\CollectibleFactory> */
    use HasFactory;

    protected $fillable = [
        "game_id",
        "type",
        "description",
        "images",
        "map_location"
    ];

    protected $casts = [
        'images' => 'array',
        'map_location' => 'array',
    ];

    public $timestamps = false;

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
