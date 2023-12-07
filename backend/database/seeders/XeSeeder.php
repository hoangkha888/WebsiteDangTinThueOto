<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Xe;

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
            "fk_MaHinhAnh" => "1"

        ]);

        $xe = [
            [
                "TenXe" => "MG 5 standard 2022",
                "SoGhe" => "4",
                "TinhTrang" => "Còn mới",
                "NamSx" => "2022-2-7",
                "fk_MaHangXe" => "1",
                "fk_MaNhienLieu" => "1",
                "fk_MaTinhNang" => "1",
                "fk_MaHinhAnh" => "1"
            ],

            [
                "TenXe" => "Hyundai Accent 2022",
                "SoGhe" => "4",
                "TinhTrang" => "Xe cũ",
                "NamSx" => "2022-5-17",
                "fk_MaHangXe" => "3",
                "fk_MaNhienLieu" => "1",
                "fk_MaTinhNang" => "1",
                "fk_MaHinhAnh" => "1"
            ],
            
        ];

        Xe::insert($xe);
    }
}
