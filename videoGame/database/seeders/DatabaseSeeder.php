<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TopicsTableSeeder::class);
        $this->call(userTableSeeder::class);
        $this->call(gamesTableSeeder::class);
        $this->call(gameTopicsTableSeeder::class);
        $this->call(companiesTableSeeder::class);
    }
}
