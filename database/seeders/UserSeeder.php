<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * class is responsible for populating the users table in the database with dummy user data. 
 * It also extends the Seeder class provided by Laravel for database seeding.
 */
class UserSeeder extends Seeder
{
    /**
     * method which serves as the entry point for the seeder. 
     * Inside this method, the DB::table('users')->insert() function 
     * is used to insert data into the users table.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
                'id' => 1,
                'login' => 'Admin',
                'password' => password_hash('Admin', PASSWORD_BCRYPT),
                'name' => 'Admin',
                'surname' => 'Doe',
                'phone' => '665222111',
                'email' => 'email@email.com',
                'age' => 22,
                'gender' => 'male'
            ],[
                'id' => 2,
                'login' => 'tom',
                'password' => password_hash('ttomm', PASSWORD_BCRYPT),
                'name' => 'Tom',
                'surname' => 'Cena',
                'phone' => '123321123',
                'email' => 'email@email.com',
                'age' => '24',
                'gender' => 'male'
            ]]);
    }
}
