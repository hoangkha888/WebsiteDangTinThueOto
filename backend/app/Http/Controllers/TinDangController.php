<?php

namespace App\Http\Controllers;
use App\Models\TinDang;

use Illuminate\Http\Request;

class TinDangController extends Controller
{
    public function index(){
        $tindang = TinDang::
            join('xe', 'xe.MaXe', '=', 'tindang.fk_MaXe')
            ->join('nhienlieu', 'xe.fk_MaNhienLieu', '=', 'nhienlieu.MaNhienLieu')
            ->join('hangxe', 'xe.fk_MaHangXe', '=', 'hangxe.MaHangXe')
            ->join('xetinhnang', 'xe.MaXe', '=', 'xetinhnang.fk_MaXe')
            ->join('tinhnang', 'xetinhnang.fk_MaTinhNang', '=', 'tinhnang.MaTinhNang')
            ->join('nguoidung', 'nguoidung.MaNguoiDung', '=', 'tindang.fk_MaNguoiDung')
            ->join('hinhanh', 'xe.fk_MaHinhAnh', '=', 'hinhanh.MaHinhAnh') 
            ->join('danhgia', 'danhgia.fk_MaTinDang', '=', 'tindang.MaTinDang')
            ->select(
                'tindang.*',
                'hangxe.TenHangXe',
                'nhienlieu.TenNhienLieu',
                'hinhanh.Url',
                'xe.*',
                'nguoidung.TenDangNhap',
                'tinhnang.TenTinhNang',
                'danhgia.NoiDung'
            )
            ->get();

        return response()->json($tindang);

       // return Xe::get();
    }
}
