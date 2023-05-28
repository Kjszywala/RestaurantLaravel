<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * The ReservationSeeder class is responsible for populating the reservations table in 
 * the database with dummy data. It extends the Seeder class, which is provided by 
 * Laravel for database seeding purposes.
 */
class ReservationSeeder extends Seeder
{
    /**
     * Entry point for the seeder. Inside this method, the DB::table('reservations')->insert() 
     * function is used to insert data into the reservations table.
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
