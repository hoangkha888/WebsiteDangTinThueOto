<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'nguoidung';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'MaNguoiDung';

    /**
     * Fillable fields for the model.
     *
     * @var array
     */
    protected $fillable = [
        'HoTen',
        'TenDangNhap',
        'Sdt',
        'MatKhau'
    ];

    /**
     * Hidden fields for the model.
     *
     * @var array
     */
    protected $hidden = [
        'MatKhau',
    ];

    public function quyentruycap()
    {
        return $this->belongsTo(QuyenTruyCap::class, 'fk_MaQuyen', 'MaQuyen');
    }

    
}
