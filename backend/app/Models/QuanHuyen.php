<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanHuyen extends Model
{
    use HasFactory;
    protected $table = 'quanhuyen';

    protected $fillable = [
        'TenQuanHuyen',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function phuongxa()
    {
        return $this->belongsTo(QuyenTruyCap::class, 'fk_MaXaPhuong', 'MaXaPhuong');
    }
}
