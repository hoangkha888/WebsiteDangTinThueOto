<?php

namespace App\Http\Controllers;
use App\Models\Xe;

use Illuminate\Http\Request;

class XeController extends Controller
{
    public function index(){
        $xe = Xe::
        join('nhienlieu', 'xe.fk_MaNhienLieu', '=', 'nhienlieu.MaNhienLieu')
        ->join('xetinhnang', 'xe.MaXe', '=', 'xetinhnang.fk_MaXe')
        ->join('hangxe', 'xetinhnang.fk_MaTinhNang', '=', 'hangxe.MaHangXe')
        ->join('tinhnang', 'xetinhnang.fk_MaTinhNang', '=', 'tinhnang.MaTinhNang')
        ->join('hinhanh', 'xe.fk_MaHinhAnh', '=', 'hinhanh.MaHinhAnh') 
        ->select(
            'xe.*',
            'nhienlieu.TenNhienLieu',
            'xetinhnang.fk_MaXe',
            'xetinhnang.fk_MaTinhNang',
            'hangxe.TenHangXe',
            'tinhnang.TenTinhNang',
            'hinhanh.Url'
        )
        ->get();

    return response()->json($xe);

       // return Xe::get();
    }
}
