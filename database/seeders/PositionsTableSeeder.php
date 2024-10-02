<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'PositionName' => 'Lễ tân',
                'Description' => 'Phụ trách tiếp đón khách và xử lý yêu cầu.',
            ],
            [
                'PositionName' => 'Quản lí',
                'Description' => 'Quản lý tài chính và kế toán của khách sạn.',
            ],
            [
                'PositionName' => 'Nhân viên',
                'Description' => 'Nhân viên chung của khách sạn, có thể đảm nhiệm nhiều vị trí khác nhau.',
            ],
        ]);
    }
}
