<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatxeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("datxe")->insert([
            "NgayThue" => "2023-2-7",
            "NgayTra" => "2023-2-10",
            "TrangThai" => "đang chờ",
            "fk_MaNguoiDung" => "1",
            "fk_MaXe" => "1"
        ]);
    }
}
