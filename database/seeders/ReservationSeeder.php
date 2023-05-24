<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert([[
            'id' => 1,
            'date' => '2023-05-27',
            'time' => '12:00:00',
            'party_size' => 2,
            'user_id' => 1,
            'table_id' => 1
            ],[
            'id' =>2,
            'date' => '2023-05-23',
            'time' => '14:00:00',
            'party_size' => 4,
            'user_id' => 2,
            'table_id' => 2
            ],[
            'id' =>3,
            'date' => '2023-05-23',
            'time' => '16:30:00',
            'party_size' => 2,
            'user_id' => 2,
            'table_id' => 2
            ]]);
    }
}
