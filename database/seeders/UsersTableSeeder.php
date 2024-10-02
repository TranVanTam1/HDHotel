<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('adminpassword'), // Hash password
                'roleID' => 1, // Giả sử roleID 1 là admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('memberpassword'),
                'roleID' => 2, // Giả sử roleID 2 là member
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'admin3@gmail.com',
                'password' => Hash::make('customerpassword'),
                'roleID' => 3, // Giả sử roleID 3 là customer
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
