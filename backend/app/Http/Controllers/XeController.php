<?php

namespace App\Http\Controllers;
use App\Models\Xe;

use Illuminate\Http\Request;

class XeController extends Controller
{
    public function index(){
        $xe = Xe::
            join('hangxe', 'xe.fk_MaHangXe', '=', 'hangxe.MaHangXe')
            ->join('nhienlieu', 'xe.fk_MaNhienLieu', '=', 'nhienlieu.MaNhienLieu')
            ->join('tinhnang', 'xe.fk_MaTinhNang', '=', 'tinhnang.MaTinhNang')
            ->select(
                'xe.*',
                'hangxe.TenHangXe',
                'nhienlieu.TenNhienLieu',
                'tinhnang.TenTinhNang'
            )
            ->get();

        return response()->json($xe);

       // return Xe::get();
    }
}
