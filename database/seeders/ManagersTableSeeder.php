<?php

namespace Database\Seeders;

use App\Models\Managers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //insert data
        $managers = [
            [
                'clubs_id' => 1,
                'photo' => 'https://resources.premierleague.com/premierleague/
                photos/players/250x250/man39237.png',
                'name' => 'Thomas Tuchel',
                'old' => '47',
                'nationality' => 'Germany',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 2,
                'photo' => 'https://resources.premierleague.com/premierleague/
                photos/players/250x250/man51018.png',
                'name' => 'Thomas Tuchel',
                'old' => '47',
                'nationality' => 'Germany',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 3,
                'photo' => 'https://resources.premierleague.com/premierleague/
                photos/players/250x250/man39237.png',
                'name' => 'Thomas Tuchel',
                'old' => '47',
                'nationality' => 'Germany',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 4,
                'photo' => 'https://resources.premierleague.com/premierleague/
                photos/players/250x250/man39235.png',
                'name' => 'Thomas Tuchel',
                'old' => '47',
                'nationality' => 'Germany',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 5,
                'photo' => 'https://resources.premierleague.com/premierleague/
                photos/players/250x250/man39247.png',
                'name' => 'Thomas Tuchel',
                'old' => '47',
                'nationality' => 'Germany',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 6,
                'photo' => 'https://resources.premierleague.com/premierleague/
                photos/players/250x250/man39137.png',
                'name' => 'Thomas Tuchel',
                'old' => '47',
                'nationality' => 'Germany',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Managers::insert($managers);
    }
}
