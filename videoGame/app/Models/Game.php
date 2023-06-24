<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'cover'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Topic::class, 'game_category', 'game_id', 'category_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
