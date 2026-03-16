<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'game_id'];

    protected $casts = [
        'user_id' => 'integer',
        'game_id' => 'integer',
    ];

    public $timestamps = false;

    public $incrementing = false;
    protected $primaryKey = null; 
}