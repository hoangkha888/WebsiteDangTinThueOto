<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HangXe extends Model
{
    use HasFactory;

    protected $table = 'hangxe';

    protected $fillable = [
        'TenHangXe',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
