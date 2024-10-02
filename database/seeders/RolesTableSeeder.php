<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['RoleName' => 'admin', 'Description' => 'Quản trị viên hệ thống.'],
            ['RoleName' => 'member', 'Description' => 'Người dùng thông thường, có quyền truy cập cơ bản.'],
            ['RoleName' => 'khách hàng', 'Description' => 'Người dùng dịch vụ của khách sạn, có quyền đặt phòng và quản lý đặt phòng cá nhân.'],
        ]);
    }
}
