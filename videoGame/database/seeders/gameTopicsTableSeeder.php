<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GameTopic;


class gameTopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GameTopic::create([
            'game_id' => 1,
            'topic_id' => 1,
        ]);

        GameTopic::create([
            'game_id' => 2,
            'topic_id' => 11,
        ]);


        GameTopic::create([
            'game_id' => 3,
            'topic_id' =>3,
        ]);


        GameTopic::create([
            'game_id' => 3,
            'topic_id' => 1,
        ]);


        GameTopic::create([
            'game_id' => 3,
            'topic_id' => 6,
        ]);

        GameTopic::create([
            'game_id' => 4,
            'topic_id' => 7,
        ]);
    }
}
