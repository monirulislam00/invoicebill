<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
        //admin
            [
               'name' => 'admin',
               'email' => 'admin@gmail.com',
               'password' => Hash::make('123'),
               'role'   => 'admin',
               'status' => 'active' 
            ],
        // User part
            [
               'name' => 'Tareq user',
               'email' => 'tareq@gmail.com',
               'password' => Hash::make('123'),
               'role'   => 'user',
               'status' => 'active' 
            ],

        ]);
    }
}
