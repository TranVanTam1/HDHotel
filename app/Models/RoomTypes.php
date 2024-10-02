<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomTypes extends Model
{
    use HasFactory;
    protected $table='roomtypes';
    // Các thuộc tính có thể được gán hàng loạt (mass assignable)
    protected $fillable = [
        'RoomTypeName',
        'Description',
        'ate',
    ];

    /**
     * Khai báo quan hệ với model Room
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany(Rooms::class, 'RoomTypeID');
    }
}
