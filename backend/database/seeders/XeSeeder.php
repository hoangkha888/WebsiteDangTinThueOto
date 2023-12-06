<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class XeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("xe")->insert([
            "TenXe" => "Honda 2017",
            "SoGhe" => "4",
            "TinhTrang" => "Còn mới",
            "NamSx" => "2021-2-7",
            "fk_MaHangXe" => "1",
            "fk_MaNhienLieu" => "1",
            "fk_MaTinhNang" => "1",

        ]);
    }
}
