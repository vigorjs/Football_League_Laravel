<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $players = [
            [
                'clubs_id' => 1,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Goalkeeper',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 2,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p125153.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Forward',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 3,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p155153.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Striker',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 4,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p162153.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Defender',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 5,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p165133.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Goalkeeper',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 6,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p143151.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Wing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 6,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p132153.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Goalkeeper',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 5,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p105153.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Forward',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 4,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p156153.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Striker',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 3,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p162150.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Defender',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 2,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p165123.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Goalkeeper',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 1,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p165051.png',
                'name' => 'Thomas Tuchel',
                'height' => '180',
                'position' => 'Wing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Players::insert($players);
    }
}
