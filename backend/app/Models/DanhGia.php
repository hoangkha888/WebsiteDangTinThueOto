<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    use HasFactory;

    protected $table = 'danhgia';

    protected $fillable = [
        'NoiDung',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function nguoidung()
    {
        return $this->belongsTo(NguoiDung::class, 'fk_MaNguoiDung');
    }

    public function tindang()
    {
        return $this->belongsTo(TinDang::class, 'fk_MaTinDang');
    }
}
