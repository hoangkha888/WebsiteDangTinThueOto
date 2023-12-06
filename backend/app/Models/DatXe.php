<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatXe extends Model
{
    use HasFactory;

    protected $table = 'datxe';

    protected $fillable = [
        'NgayThue',
        'NgayTra',
        'TrangThai',
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

    public function xe()
    {
        return $this->belongsTo(Xe::class, 'fk_MaXe');
    }
}
