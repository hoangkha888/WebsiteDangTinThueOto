<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinhNang extends Model
{
    use HasFactory;

    protected $table = 'tinhnang';

    protected $fillable = [
        'TenTinhNang',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
