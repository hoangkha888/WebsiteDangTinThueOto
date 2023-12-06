<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TindangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("tindang")->insert([
            "TieuDe" => "Cho thuê xe audi 2022",
            "MoTa" => "có luôn màn hình Android hỗ trợ cảnh báo tốc độ ,camera phạt nguội ,cam hành trình đầy đủ,xe đi rất tiết kiệm xăng,full đen LED .....co luôn cảm biến áp suất lốp nên đi xa rất yên tâm",
            "GiaThue" => "200000",
            "DiaChiNhanXe" => "25 ông ích khiêm",
            "TrangThai" => "đã duyệt",
            "fk_MaNguoiDung" => "1",
            "fk_MaXe" => "1",
            "fk_MaHinhAnh" => "1",
            "fk_MaXaPhuong" => "1",
        ]);
    }
}
