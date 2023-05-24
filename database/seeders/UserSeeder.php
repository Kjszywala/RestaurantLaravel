<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
