<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhToan extends Model
{
    use HasFactory;

    protected $table = 'thanhtoan';

    protected $fillable = [
        'PhuongThucThanhToan',
        'TongTien',
        'TrangThaiThanhToan',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function datxe()
    {
        return $this->belongsTo(DatXe::class, 'fk_MaDatXe');
    }
}
