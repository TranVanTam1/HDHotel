<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'RoomNumber' => '101',
                'RoomTypeID' => 1,  // ID của loại phòng Single
                'RoomPrice' => 50.00,
                'Status' => 'Available',
                'Capacity' => 1,
                'Description' => 'Room 101, Single bed.',
            ],
            [
                'RoomNumber' => '102',
                'RoomTypeID' => 2,  // ID của loại phòng Double
                'RoomPrice' => 75.00,
                'Status' => 'Occupied',
                'Capacity' => 2,
                'Description' => 'Room 102, Double bed.',
            ],
            [
                'RoomNumber' => '201',
                'RoomTypeID' => 3,  // ID của loại phòng Suite
                'RoomPrice' => 150.00,
                'Status' => 'Available',
                'Capacity' => 4,
                'Description' => 'Room 201, Luxurious suite.',
            ],
        ]);
    }
}
