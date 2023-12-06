<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TinhNang;

class TinhnangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tinhnang = [
            [
                "TenTinhNang" => "Bluetooth",
            ],
            [
                "TenTinhNang" => "Camera hành trình",
            ],
            [
                "TenTinhNang" => "Cảnh báo tốc độ",
            ],
            [
                "TenTinhNang" => "Định vị GPS",
            ],
            [
                "TenTinhNang" => "Màn hình DVD",
            ],
            [
                "TenTinhNang" => "Khe cắm USB",
            ],
            [
                "TenTinhNang" => "Túi khí an toàn",
            ],
            [
                "TenTinhNang" => "Camera lùi",
            ],
            [
                "TenTinhNang" => "Cảm biến va chạm",
            ],
            [
                "TenTinhNang" => "ETC",
            ],
            [
                "TenTinhNang" => "Bản đồ",
            ],
            
        ];

        TinhNang::insert($tinhnang);


    }
}
