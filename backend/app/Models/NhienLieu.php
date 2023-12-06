<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhienLieu extends Model
{
    use HasFactory;

    protected $table = 'nhienlieu';

    protected $fillable = [
        'TenNhienLieu',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
