<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhuongXa extends Model
{
    use HasFactory;
    protected $table = 'xaphuong';

    protected $fillable = [
        'TenXaPhuong',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
