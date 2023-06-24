<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topic::create(['id'=>1,'name'=>'Action']);
        Topic::create(['id'=>2,'name'=>'Platform']);
        Topic::create(['id'=>3,'name'=>'Shooter']);
        Topic::create(['id'=>4,'name'=>'Fighting']);
        Topic::create(['id'=>5,'name'=>'Stealth']);
        Topic::create(['id'=>6,'name'=>'Survival']);
        Topic::create(['id'=>7,'name'=>'Battle Royale']);
        Topic::create(['id'=>8,'name'=>'Adventure']);
        Topic::create(['id'=>9,'name'=>'Puzzle']);
        Topic::create(['id'=>10,'name'=>'Simulator']);
        Topic::create(['id'=>11,'name'=>'Strategy']);
    }
}
