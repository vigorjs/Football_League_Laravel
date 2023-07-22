<?php

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Stadiums;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $clubs = [
            [
                'name' => 'Chelsea FC',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url' => 'www.chelseafc.com',
                'thropy' => '19',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Arsenal',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t3.svg',
                'url' => 'www.arsenal.com',
                'thropy' => '8',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Manchester United',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t1.svg',
                'url' => 'www.manutd.com',
                'thropy' => '20',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Manchester City',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t43.svg',
                'url' => 'www.mancity.com',
                'thropy' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Liverpool',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t14.svg',
                'url' => 'www.liverpoolfc.com',
                'thropy' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tottenham Hotspur',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t6.svg',
                'url' => 'www.tottenhamhotspur.com',
                'thropy' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        $stadiums = Stadiums::all();
        $stadiumsCount = $stadiums->count();
        $index = 0;

        foreach ($clubs as &$club) {
            $club['stadiums_id'] = $stadiums[$index % $stadiumsCount]->id;
            $index++;
        }

        Clubs::insert($clubs);
    }
}
