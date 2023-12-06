<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HinhanhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("hinhanh")->insert([
            "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mg_5_standard_2022/p/g/2023/02/24/15/0MInu6akLhyZbmNyr0iUyQ.jpg",
        ]);
    }
}
