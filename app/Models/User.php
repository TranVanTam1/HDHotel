<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Các thuộc tính có thể gán đại trà.
     *
     * @var array
     */
    protected $fillable = [
       
        'email',
        'password',
        'RoleID',
    ];

    /**
     * Các thuộc tính mà nên được ẩn khi chuyển đổi thành mảng hoặc JSON.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Các thuộc tính mà nên được cast thành kiểu dữ liệu khác.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getRoleNameAttribute()
{
    switch ($this->role) {
        case 1:
            return 'Admin';
        case 2:
            return 'Editor';
        case 3:
            return 'User';
        default:
            return 'Unknown';
    }
}
// User.php
public function customer()
{
    return $this->hasOne(Customer::class, 'UserID', 'id');
}

}
