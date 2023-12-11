<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinDang extends Model
{
    use HasFactory;

    protected $table = 'tindang';

    // protected $fillable = [
    //     'TieuDe',
    //     'MoTa',
    //     'GiaThue',
    //     'DiaChiNhanXe',
    //     'TrangThai',
    // ];

    protected $guarded = [];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function nguoidung()
    {
        return $this->belongsTo(NguoiDung::class, 'fk_MaNguoiDung');
    }

    public function xe()
    {
        return $this->belongsTo(Xe::class, 'fk_MaXe');
    }

    public function hinhanh()
    {
        return $this->belongsToMany(HinhAnh::class, 'tindang_hinhanh', 'fk_MaTinDang', 'fk_MaHinhAnh');
    }

    public function xaphuong()
    {
        return $this->belongsTo(XaPhuong::class, 'fk_MaXaPhuong');
    }
}
