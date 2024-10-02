<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;
    protected $table = 'bookingdetails';

    protected $fillable = [
        'BookingID',
        'NumberOfPeople',
        'CCCD',
        'NumberOfNights',
        'RoomRate',
        'Discount',
        'TotalRoomCost',
    ];
}
