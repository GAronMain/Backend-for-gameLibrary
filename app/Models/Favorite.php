<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    /** @use HasFactory<\Database\Factories\FavoriteFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'game_id'];

    // Tell Laravel there is no 'id' column
    public $incrementing = false;
    protected $primaryKey = null; 
    
    // If you don't have created_at/updated_at
    public $timestamps = false;
}
