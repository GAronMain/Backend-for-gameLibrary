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

    protected $casts = ['platforms' => 'array',];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function collectibles()
    {
        return $this->hasMany(Collectible::class, "game_id");
    }
    
    public function favoritedByUsers()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
