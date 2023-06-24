<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ]);
*/
    \App\Models\User::factory(3)->create();

    }
}
