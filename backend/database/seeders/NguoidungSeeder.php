<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\NguoiDung;


class NguoidungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $nguoidung = [
            [
                "HoTen" => "Hoàng Văn Khá",
                "TenDangNhap" => "admin",
                "Sdt" => "01234567789",
                "MatKhau" => Hash::make("admin"),
                "anhdaidien" => "https://cdn-icons-png.flaticon.com/256/147/147142.png",
                "fk_MaQuyen" => "1"
            ],
            [
                "HoTen" => "Trần Hoàng Duy",
                "TenDangNhap" => "duy123",
                "Sdt" => "01234567111",
                "MatKhau" => Hash::make("123"),
                "anhdaidien" => "https://cdn-icons-png.flaticon.com/256/147/147142.png",
                "fk_MaQuyen" => "2"
            ],
            [
                "HoTen" => "Hoàng Việt Hùng",
                "TenDangNhap" => "hung123",
                "Sdt" => "0123456222",
                "MatKhau" => Hash::make("123"),
                "anhdaidien" => "https://cdn-icons-png.flaticon.com/256/147/147142.png",
                "fk_MaQuyen" => "2"
            ],
            [
                "HoTen" => "Nguyễn Phương Ly",
                "TenDangNhap" => "ly123",
                "Sdt" => "0123456333",
                "MatKhau" => Hash::make("123"),
                "anhdaidien" => "https://cdn-icons-png.flaticon.com/256/147/147142.png",
                "fk_MaQuyen" => "2"
            ],
            [
                "HoTen" => "Bùi Chí Vũ",
                "TenDangNhap" => "vu123",
                "Sdt" => "0123456444",
                "MatKhau" => Hash::make("123"),
                "anhdaidien" => "https://cdn-icons-png.flaticon.com/256/147/147142.png",
                "fk_MaQuyen" => "3"
            ],
            [
                "HoTen" => "Nông Đức Thiên",
                "TenDangNhap" => "thien123",
                "Sdt" => "0123456555",
                "MatKhau" => Hash::make("123"),
                "anhdaidien" => "https://cdn-icons-png.flaticon.com/256/147/147142.png",
                "fk_MaQuyen" => "3"
            ],
            [
                "HoTen" => "Ngô Hoàng Anh",
                "TenDangNhap" => "anh123",
                "Sdt" => "012345666",
                "MatKhau" => Hash::make("123"),
                "anhdaidien" => "https://cdn-icons-png.flaticon.com/256/147/147142.png",
                "fk_MaQuyen" => "3"
            ],
            [
                "HoTen" => "Ngô Xuân Bình",
                "TenDangNhap" => "binh123",
                "Sdt" => "0123456777",
                "MatKhau" => Hash::make("123"),
                "anhdaidien" => "https://cdn-icons-png.flaticon.com/256/147/147142.png",
                "fk_MaQuyen" => "2"
            ],
        ];
        
        NguoiDung::insert($nguoidung);
    }
}
