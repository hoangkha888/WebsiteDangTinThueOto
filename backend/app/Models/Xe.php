<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xe extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'xe';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'MaXe';

    /**
     * Fillable fields for the model.
     *
     * @var array
     */
    protected $fillable = [
        'TenXe',
        'SoGhe',
        'TinhTrang',
        'NamSx',
    ];

    /**
     * Relationships
     */
    public function hangxe()
    {
        return $this->belongsTo(HangXe::class, 'fk_MaHangXe', 'MaHangXe');
    }

    public function nhienlieu()
    {
        return $this->belongsTo(NhienLieu::class, 'fk_MaNhienLieu', 'MaNhienLieu');
    }


}
