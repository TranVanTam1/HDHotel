<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks to avoid issues during seeding
        Schema::disableForeignKeyConstraints();
        
        DB::table('customers')->insert([
            [
                'UserID' => 1, // Trùng với id của user trong bảng users
                'FullName' => 'Nguyễn Văn A',
                'phone' => '0987654321',
                'address' => '123 Đường ABC, Quận 1, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'UserID' => 2, // Trùng với id của user trong bảng users
                'FullName' => 'Nguyễn Văn A',
                'phone' => '0976543210',
                'address' => '456 Đường XYZ, Quận 3, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'UserID' => 3, // Trùng với id của user trong bảng users
                'FullName' => 'Nguyễn Văn A',
                'phone' => '0965432109',
                'address' => '789 Đường MNO, Quận 5, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        // Re-enable foreign key checks
        Schema::enableForeignKeyConstraints();
    }
}
