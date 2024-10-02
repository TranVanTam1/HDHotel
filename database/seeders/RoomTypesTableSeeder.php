<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('roomtypes')->insert([
            [
                'RoomTypeName' => 'Single',
                'Description' => 'A single room with one bed.',
                'ate' => now()->format('Y-m-d')  // Bạn có thể thay đổi giá trị này nếu cần
            ],
            [
                'RoomTypeName' => 'Double',
                'Description' => 'A room with a double bed.',
                'ate' => now()->format('Y-m-d')
            ],
            [
                'RoomTypeName' => 'Suite',
                'Description' => 'A luxurious suite with multiple rooms.',
                'ate' => now()->format('Y-m-d')
            ],
        ]);
    }
}
