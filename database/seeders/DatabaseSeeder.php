<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * By using the call method, Laravel will execute the run method of each specified seeder class in the given order.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /**
         * This seeder class is responsible for seeding the reservations table in the database.
         */
        $this->call([
            ReservationSeeder::class,
            ]);
        /**
         * UserSeeder::class: This seeder class is responsible for seeding the users table in the database.
         */
        $this->call([
            UserSeeder::class,
            ]);
        /**
         * TableSeeder::class: This seeder class is responsible for seeding the tables table in the database.
         */
        $this->call([
            TableSeeder::class,
            ]);
    }
}
