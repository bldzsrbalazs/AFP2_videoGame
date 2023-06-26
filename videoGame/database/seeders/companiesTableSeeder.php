<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class companiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'Gearbox Software',
        ]);
        Company::create([
            'name' => 'Rockstar Games',
        ]);
        Company::create([
            'name' => 'Riot Games',
        ]);
        Company::create([
            'name' => 'Epic Games',
        ]);
    }
}
