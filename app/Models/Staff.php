<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserID',
        'FullName',
        'PositionID',
        'Phone',
        'HireDate',
        'Salary',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'PositionID');
    }
    
}
