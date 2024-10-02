<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('staff')->insert([
            [
                'UserID' => 1, // Tham chiếu đến bảng users
                'FullName' => 'John Doe',
                'PositionID' => 2, // Tham chiếu đến bảng positions
                'Phone' => '123456789',
                'HireDate' => Carbon::create('2022', '01', '01'),
                'Salary' => 5000.00,
            ],
            [
                'UserID' => 2,
                'FullName' => 'Jane Smith',
                'PositionID' => 3,
                'Phone' => '987654321',
                'HireDate' => Carbon::create('2021', '05', '15'),
                'Salary' => 4500.50,
            ],
            [
                'UserID' => null, // Trường hợp không có user id
                'FullName' => 'Sarah Johnson',
                'PositionID' => 1,
                'Phone' => null, // Không có số điện thoại
                'HireDate' => null, // Không có ngày thuê
                'Salary' => 4000.00,
            ],
        ]);
    }
}
