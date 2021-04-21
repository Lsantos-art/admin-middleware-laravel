<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Comum',
            'email' => 'comum@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'comum'
        ]);

    }
}
