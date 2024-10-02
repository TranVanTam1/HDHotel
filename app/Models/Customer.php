<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Tên bảng trong database (nếu tên không theo chuẩn)
    protected $table = 'customers';

    // Các trường có thể được gán hàng loạt (mass assignable)
    protected $fillable = [
        'UserID',
        'FullName',
        'Phone',
        'Address',
    ];

    
    // Customer.php
public function user()
{
    return $this->belongsTo(User::class, 'UserID', 'id');
}

}
