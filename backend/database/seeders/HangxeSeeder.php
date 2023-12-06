<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HangXe;


class HangxeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hangxe = [
            [
                "TenHangXe" => "Toyota",
            ],
            [
                "TenHangXe" => "Hyundai",
            ],
            [
                "TenHangXe" => "Honda", 
            ],
            [
                "TenHangXe" => "Kia", 
            ],
            [
                "TenHangXe" => "Mazda", 
            ],
            [
                "TenHangXe" => "Vinfast", 
            ],
            [
                "TenHangXe" => "BMW", 
            ],
            [
                "TenHangXe" => "Audi", 
            ],
            [
                "TenHangXe" => "Ford", 
            ],
            [
                "TenHangXe" => "Mercedes-Benz
                ", 
            ],
            [
                "TenHangXe" => "Isuzu", 
            ],

            
        ];

        HangXe::insert($hangxe);
    }
}
