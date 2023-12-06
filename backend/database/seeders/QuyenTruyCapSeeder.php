<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuyenTruyCap;

class QuyenTruyCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quyen = [
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

        QuyenTruyCap::insert($quyen);
    }
}
