<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;



class NguoiDungController extends Controller
{
    public function show($id)
    {
        return  NguoiDung::findOrFail($id);
    }


    public function index(){
        $nguoidung = Nguoidung::
            join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select(
                'users.*',
                'contacts.phone',
                'orders.price')
            ->get();

        return response()->json($nguoidung);
    }
}
