<?php

namespace Database\Seeders;

use App\Models\Matches;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $matches = [
            [
                'clubs_id' => 1,
                'rivals_id' => 2,
                'schedule' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 2,
                'rivals_id' => 1,
                'schedule' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 3,
                'rivals_id' => 4,
                'schedule' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 4,
                'rivals_id' => 2,
                'schedule' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 5,
                'rivals_id' => 3,
                'schedule' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clubs_id' => 6,
                'rivals_id' => 5,
                'schedule' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Matches::insert($matches);
    }
}
