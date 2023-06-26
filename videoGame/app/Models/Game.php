<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name','smalldesc', 'description', 'cover'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class, 'game_topic', 'game_id', 'topic_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function getHasCoverAttribute()
    {
        return $this->cover != null;
    }
    public function getCoverImageAttribute()
    {
        if($this->has_cover)
        {
            return asset("upload/img/cover/{$this->cover}");
        }
     return "https://via.placeholder.com/300?text=".$this->name;

    }
    public function played()
    {
        return $this->belongsToMany(User::class, 'plays', 'game_id', 'user_id');
    }


}
