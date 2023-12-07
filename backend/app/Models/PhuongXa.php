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

    public function quanhuyen()
    {
        return $this->belongsTo(QuanHuyen::class, 'fk_MaQuanHuyen'); // assuming QuanHuyen model exists
    }
}
