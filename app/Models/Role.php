<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Nếu bảng của bạn không phải là dạng số nhiều của tên model
    protected $table = 'roles';

    // Các cột mà bạn cho phép gán hàng loạt
    protected $fillable = [
        'RoleName',
        'Description',
    ];

    // Nếu bạn không sử dụng các cột timestamps
    public $timestamps = true;
}
