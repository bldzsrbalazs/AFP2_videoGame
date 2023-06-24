<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameTopic extends Model
{
    use HasFactory;

    protected $table = 'game_topics';
    protected $fillable = ['game_id', 'topic_id'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
