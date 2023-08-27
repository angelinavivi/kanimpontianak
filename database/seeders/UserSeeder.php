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
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' =>'Admin',
                'password' => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'username' =>'saya',
                'password' => Hash::make('saya123'),
                'created_at' => now(),
                'updated_at' =>now(),
            ]
        ]);
        // DB::table('users')->insert([
        //     'username' =>'Staff',
        //     'password' => Hash::make('staff123'),
        //     'role'=> 'staff',
        //     'created_at' => now(),
        //     'updated_at' =>now(),
        // ]);
    }
}
