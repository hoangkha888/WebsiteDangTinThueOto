<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuyenTruyCap extends Model
{
    use HasFactory;

    protected $table = 'quyentruycap';

    protected $primaryKey = 'MaQuyen';

    public $timestamps = true;

    protected $fillable = [
        'TenQuyen'
    ];
}
