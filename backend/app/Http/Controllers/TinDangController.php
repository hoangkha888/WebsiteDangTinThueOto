<?php

namespace App\Http\Controllers;
use App\Models\TinDang;
use App\Models\Xe;

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

    public function create(){
        $xe = \DB::table("xe")->get();

        $hangxe = \DB::table("hangxe")
        ->select(
            "MaHangXe As value",
            "TenHangXe As label"
        )
        ->get(); 

        $nhienlieu = \DB::table("nhienlieu")
        ->select(
            "MaNhienLieu As value",
            "TenNhienLieu As label"
        )
        ->get(); 

        $hinhanh = \DB::table("hinhanh") 
        ->select(
            "MaHinhAnh As value",
            "Url As label"
        )
        ->get();

        $tinhnang = \DB::table("tinhnang")->get(); 


        $xaphuong = \DB::table("xaphuong")
        ->select(
            "MaXaPhuong As value",
            "TenXaPhuong As label"
        )
        ->get(); 


        $quanhuyen = \DB::table("quanhuyen")
        ->select(
            "MaQuanHuyen As value",
            "TenQuanHuyen As label"
        )
        ->get(); 

        return response()->json([

            "xe" => $xe,
            "hangxe" => $hangxe,
            "nhienlieu" => $nhienlieu,
            "hinhanh" => $hinhanh,
            "tinhnang" => $tinhnang,
            "quanhuyen" => $quanhuyen,
            "xaphuong" => $xaphuong,
            
        ]);
    }


    public function store(Request $request)
    {
        // Eloquent ORM
        Xe::create([
            "TenXe" => $request["TenXe"],
            "SoGhe" => $request["SoGhe"],
            "TinhTrang" => $request["TinhTrang"],
            "NamSx" => $request["NamSx"],
            "fk_MaHangXe" => $request["fk_MaHangXe"],
            "fk_MaNhienLieu" => $request["fk_MaNhienLieu"],
            "fk_MaHinhAnh" => $request["fk_MaHinhAnh"]
        ]);

        // \DB::table('xe')->insert([
        //     "TenXe" => $request["TenXe"],
        //     "SoGhe" => $request["SoGhe"],
        //     "TinhTrang" => $request["TinhTrang"],
        //     "NamSx" => $request["NamSx"],
        //     "fk_MaHangXe" => $request["fk_MaHangXe"],
        //     "fk_MaNhienLieu" => $request["fk_MaNhienLieu"],
        //     "fk_MaHinhAnh" => $request["fk_MaHinhAnh"]
        
        // ]);

        // TinDang::create([
        //     "TieuDe" => $request["TieuDe"],
        //     "MoTa" => $request["MoTa"],
        //     "GiaThue" => $request["GiaThue"],
        //     "DiaChiNhanXe" => $request["DiaChiNhanXe"],
        //     "fk_MaXaPhuong" => $request["fk_MaXaPhuong"],
        //     "fk_MaQuanHuyen" => $request["fk_MaQuanHuyen"],
        
        // ]);

        // return $request;

    }
}
