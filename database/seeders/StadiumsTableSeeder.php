<?php

namespace Database\Seeders;

use App\Models\Stadiums;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $stadiums = [
            [
                'name' => 'Stanford Bridge',
                'capacity' => 40000,
                'address' => 'Stanford Bridge, Fulham Road, London, SW6 1HS',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Emirates Stadium',
                'capacity' => 60000,
                'address' => 'Stanford Bridge, Fulham Road, London, SW6 1HS',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Old Trafford',
                'capacity' => 74000,
                'address' => 'Stanford Bridge, Fulham Road, London, SW6 1HS',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Etihad Stadium',
                'capacity' => 55000,
                'address' => 'Stanford Bridge, Fulham Road, London, SW6 1HS',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Anfield',
                'capacity' => 53000,
                'address' => 'Stanford Bridge, Fulham Road, London, SW6 1HS',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Tottenham Hotspur Stadium',
                'capacity' => 62000,
                'address' => 'Stanford Bridge, Fulham Road, London, SW6 1HS',
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ];
        Stadiums::insert($stadiums);
    }
}
