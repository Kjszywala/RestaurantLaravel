<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * The TableSeeder class is responsible for populating the tables table in the database with 
 * dummy data. It also extends the Seeder class provided by Laravel for database seeding.
 */
class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Inside this method, the DB::table('tables')->insert() function is used to insert 
         * data into the tables table.
         */
        DB::table('tables')->insert([[
                'id' => 1,
                'party_size' => '2'
            ],[
                'id' =>2,
                'party_size' => '3'
            ],[
                'id' =>3,
                'party_size' => '4'
            ],[
                'id' =>4,
                'party_size' => '6'
        ]]);
    }
}
