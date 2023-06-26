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
            'name' => 'Borderlands 2',
            'smalldesc' => 'The original Borderlands captured the attention of gamers',
            'description' => "The original Borderlands captured the attention of gamers, seemingly from out of nowhere, and its sequel took everything that made the original great and expanded on it. From its seamless continuation of the Borderlands vault hunting lore, to its unmatched writing, Borderlands 2 remains the high point in the Borderlands franchise. Borderlands 3 is overflowing with improvements over its predecessor The Pre-Sequel, but Borderlands 2 still can't be beat for its awesome levels, excellent DLC, and series-best villain, Handsome Jack. ",
            'cover' => 'borderlands2.jpg',
            'company_id' => 1,
        ]);

        Game::create([
            'name' => 'League of Legends',
            'smalldesc' => "League of Legends is a team-based strategy game where two teams of five powerful champions face off to destroy the other's base.",
            'description' => "League of Legends (LoL), commonly referred to as League, is a 2009 multiplayer online battle arena video game developed and published by Riot Games. Inspired by Defense of the Ancients, a custom map for Warcraft III, Riot's founders sought to develop a stand-alone game in the same genre. Since its release in October 2009, League has been free-to-play and is monetized through purchasable character customization. The game is available for Microsoft Windows and macOS. ",
            'cover' => 'lol.jpg',
            'company_id' => 3,
        ]);

        Game::create([
            'name' => 'Grand Theft Auto V',
            'smalldesc' => 'Grand Theft Auto V is an action-adventure game played from either a third-person or first-person perspective. ',
            'description' => 'Grand Theft Auto V is an action-adventure game played from either a third-person or first-person perspective. Players complete missions—linear scenarios with set objectives—to progress through the story. Outside of the missions, players may freely roam the open world.',
            'cover' => 'gtav.jpg',
            'company_id' => 2,
        ]);

        Game::create([
            'name' => 'Fortnite',
            'smalldesc' => 'Fortnite is a third person shooter survival game where the player has to survive against up to 99 other players.',
            'description' => 'Fortnite is a third person shooter survival game where the player has to survive against up to 99 other players. The total player count for each battle royale is 100. The player can build forts through collecting materials such as metal, bricks, and wood, and collect weapons before fighting other players.',
            'cover' => 'fortnite.jpg',
            'company_id' => 4,
        ]);


    }
}
