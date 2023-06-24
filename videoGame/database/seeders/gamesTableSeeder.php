<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class gamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'name' => 'Game 1',
            'description' => 'This is game 1.',
            'cover' => 'game1.jpg',
            'company_id' => 1,
        ]);


    }
}
