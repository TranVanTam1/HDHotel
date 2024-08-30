<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    // Các thuộc tính có thể được gán hàng loạt (mass assignable)
    protected $fillable = [
        'RoomNumber',
        'RoomTypeID',
        'RoomPrice',
        'Status',
        'Capacity',
        'Description',
        'image',
    ];

    /**
     * Khai báo quan hệ với model RoomType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomType()
    {
        return $this->belongsTo(RoomTypes::class, 'RoomTypeID');
    }
}
