<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuanHuyen;
class QuanhuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $quanhuyen = [
            [
                "TenQuanHuyen" => "Hải Châu",
            ],
            [
                "TenQuanHuyen" => "Cẩm Lệ",
            ],
            [
                "TenQuanHuyen" => "Thanh Khê", 
            ],
            [
                "TenQuanHuyen" => "Liên Chiểu",
            ],
            [
                "TenQuanHuyen" => "Ngũ Hành Sơn", 
            ],
            [
                "TenQuanHuyen" => "Sơn Trà",
            ],
            [
                "TenQuanHuyen" => "Hòa Vang", 
            ],
            
        ];

        QuanHuyen::insert($quanhuyen);
		
    }
}
