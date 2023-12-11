<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;



class NguoiDungController extends Controller
{
    public function show()
    {
        // return  NguoiDung::findOrFail($id);
        $tindang = \DB::table("nguoidung")->get();
        return response()->json($tindang);
    }

    public function dangnhap(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        

        // $user = NguoiDung::where('TenDangNhap', $username)->first();
        $user = \DB::table("nguoidung")
        ->where('TenDangNhap', $username)
        ->first();

        // if($user->TenDangNhap ===  $username){
        //     return response()->json([
        //                 'status' => 200,
        //                 'message' => 'đúng rồi!',
        //             ]);
        // }

        if ($user && $user->MatKhau ===  $password) {
            // Login successful

            return response()->json([
                'status' => 200,
                'message' => 'Đăng nhập thành công',
            ]);
        } else {
            // Login failed
            return response()->json([
                'status' => 401,
                'message' => 'Sai tài khoản hoặc mật khẩu!',
            ]);
        }



        // return   $password;
    }

       

}
