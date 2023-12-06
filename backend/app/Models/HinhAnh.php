<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    use HasFactory;
    protected $table = 'hinhanh';

    protected $fillable = [
        'Url',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
