<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('Admin#123'),
            'telephone' => '082246584822',
            'role' => 'Admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Ryan Febrian',
            'email' => 'ryan@gmail.com',
            'password' => Hash::make('Ryan#123'),
            'telephone' => '082222222222',
            'role' => 'User'
        ]);

        DB::table('users')->insert([
            'name' => 'Alvin Junio',
            'email' => 'alvin@gmail.com',
            'password' => Hash::make('Alvin#123'),
            'telephone' => '081111111111',
            'role' => 'User'
        ]);
    }
}
