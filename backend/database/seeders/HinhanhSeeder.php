<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HinhAnh;

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


        
        $anh = [
            [
                "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/hyundai_accent_2022/p/g/2023/08/27/14/EYlLNBkb3GznyezQ4d_8Wg.jpg",
            ],
            [
                "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_2_2023/p/g/2023/06/04/17/2je7c7T86i5hMImkAdg_fA.jpg",
            ],
            [
                "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mg_5_standard_2022/p/g/2023/02/24/15/0MInu6akLhyZbmNyr0iUyQ.jpg", 
            ],
            [
                "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hanoi/vinfast_vf8_eco_2022/p/g/2023/02/13/00/Tt2WcZbe1gpT6-zTp2rTeA.jpg", 
            ],
            [
                "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_danang/hyundai_i10_2017/p/g/2022/06/03/09/Oh5BYGgC9w3s6QLK4UxlJw.jpg", 
            ],
            [
                "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_danang/honda_city_2021/p/g/2023/07/16/16/TYy31gLA-O7LAFryEt8xJQ.jpg", 
            ],
            [
                "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mg_5_luxury_2022/p/g/2022/11/15/16/IGSmJ5JHRmPEUUbs66BfWA.jpg", 
            ],
            [
                "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/honda_civic_rs_2019/p/g/2023/10/22/14/1xiPaW3XOTaoV5n_P6aRtw.jpg", 
            ],
            [
                "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_fortuner_2016/p/g/2020/10/02/10/dXJoH7tGaq5XSbI02tlwZQ.jpg", 
            ],
            [
                "Url" => "https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/ford_focus_2008/p/g/2023/09/15/05/n50BETvfesCcf52Y9sQJ0A.jpg", 
            ],
            
        ];

        HinhAnh::insert($anh);

    }
}
