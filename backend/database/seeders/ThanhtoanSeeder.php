<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ThanhToan;


class ThanhtoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thanhtoan = [
            [
                "TenQuyen" => "admin",
            ],
            [
                "TenQuyen" => "chủ xe",
            ],
            [
                "TenQuyen" => "khách", 
            ],
            
        ];

        ThanhToan::insert($thanhtoan);
    }
}
