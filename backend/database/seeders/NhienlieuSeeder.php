<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\NhienLieu;

class NhienlieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $nhienlieu = [
            [
                "TenNhienLieu" => "xămg",
            ],
            [
                "TenNhienLieu" => "hHydrogen ",
            ],
            [
                "TenNhienLieu" => "dầu", 
            ],
            
        ];

        NhienLieu::insert($nhienlieu);


    }
}
