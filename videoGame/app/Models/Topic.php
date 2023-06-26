<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_topic', 'topic_id', 'game_id');
    }
}
