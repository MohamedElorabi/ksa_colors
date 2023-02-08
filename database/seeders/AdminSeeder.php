<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\User::create([

            'name' => 'Mohamed Elorabi',
            'email' => 'elorabi199@gmail.com',
            'password' => bcrypt('orabi123'),
            'role' => '1',
            'username' => 'orabi'

        ]);
    }
}
