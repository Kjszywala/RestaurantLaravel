<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
