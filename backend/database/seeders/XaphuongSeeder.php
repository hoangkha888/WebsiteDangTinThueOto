<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PhuongXa;

class XaphuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $xaphuong = [
            [
                "TenXaPhuong" => "Thanh Bình",
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Bình Hiên",
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Bình Thuận",
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Hòa Cường Bắc", 
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Hòa Cường Nam", 
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Hòa Khê", 
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Nam Phước", 
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Nại Hiên Đông", 
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Phước Mỹ", 
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Thạch Thang", 
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Thuận Phước",
                "fk_MaQuanHuyen" => "1" 
            ],
            [
                "TenXaPhuong" => "Xuân Hà", 
                "fk_MaQuanHuyen" => "1"
            ],
            [
                "TenXaPhuong" => "Hòa An", 
                "fk_MaQuanHuyen" => "2"
            ],
            [
                "TenXaPhuong" => "Hòa Phát", 
                "fk_MaQuanHuyen" => "2"
            ],
            [
                "TenXaPhuong" => "Hòa Thọ Đông", 
                "fk_MaQuanHuyen" => "2"
            ],
            [
                "TenXaPhuong" => "Hòa Thọ Tây", 
                "fk_MaQuanHuyen" => "2"
            ],
            [
                "TenXaPhuong" => "Phước Hòa", 
                "fk_MaQuanHuyen" => "2"
            ],
            [
                "TenXaPhuong" => "Thanh Khê Đông", 
                "fk_MaQuanHuyen" => "2"
            ],
            [
                "TenXaPhuong" => "An Khê", 
                "fk_MaQuanHuyen" => "3"
            ],
            [
                "TenXaPhuong" => "Chính Gián", 
                "fk_MaQuanHuyen" => "3"
            ],
            [
                "TenXaPhuong" => "Hòa Minh", 
                "fk_MaQuanHuyen" => "3"
            ],
            [
                "TenXaPhuong" => "Hòa Thuận Đông", 
                "fk_MaQuanHuyen" => "3"
            ],
            [
                "TenXaPhuong" => "Hòa Thuận Tây", 
                "fk_MaQuanHuyen" => "3"
            ],
            [
                "TenXaPhuong" => "Nam Thọ", 
                "fk_MaQuanHuyen" => "3"
            ],
            [
                "TenXaPhuong" => "Phước Ninh", 
                "fk_MaQuanHuyen" => "3"
            ],
            [
                "TenXaPhuong" => "Tam Thuận", 
                "fk_MaQuanHuyen" => "3"
            ],
            [
                "TenXaPhuong" => "Thạc Gián", 
                "fk_MaQuanHuyen" => "3"
            ],
            [
                "TenXaPhuong" => "Thanh Khê Tây", 
                "fk_MaQuanHuyen" => "3"
            ],
            [
                "TenXaPhuong" => "Hòa Hiệp Bắc", 
                "fk_MaQuanHuyen" => "4"
            ],
            [
                "TenXaPhuong" => "Hòa Hiệp Nam", 
                "fk_MaQuanHuyen" => "4"
            ],
            [
                "TenXaPhuong" => "Hòa Minh", 
                "fk_MaQuanHuyen" => "4"
            ],
            [
                "TenXaPhuong" => "Hòa Thọ Đông", 
                "fk_MaQuanHuyen" => "4"
            ],
            [
                "TenXaPhuong" => "Hòa Thọ Tây", 
                "fk_MaQuanHuyen" => "4"
            ],
            [
                "TenXaPhuong" => "Hòa Hải",
                "fk_MaQuanHuyen" => "5" 
            ],
            [
                "TenXaPhuong" => "Khuê Mỹ", 
                "fk_MaQuanHuyen" => "5" 
            ],
            [
                "TenXaPhuong" => "Mỹ An", 
                "fk_MaQuanHuyen" => "5" 
            ],
            [
                "TenXaPhuong" => "Ngũ Hành Sơn", 
                "fk_MaQuanHuyen" => "5" 
            ],
            [
                "TenXaPhuong" => "An Hải Đông", 
                "fk_MaQuanHuyen" => "6" 
            ],
            [
                "TenXaPhuong" => "An Hải Tây", 
                "fk_MaQuanHuyen" => "6" 
            ],
            [
                "TenXaPhuong" => "Cát Mỹ", 
                "fk_MaQuanHuyen" => "6" 
            ],
            [
                "TenXaPhuong" => "Mân Thái", 
                "fk_MaQuanHuyen" => "6" 
            ],
            [
                "TenXaPhuong" => "Nại Hiên Đông", 
                "fk_MaQuanHuyen" => "6" 
            ],
            [
                "TenXaPhuong" => "Phước Mỹ", 
                "fk_MaQuanHuyen" => "6" 
            ],
            [
                "TenXaPhuong" => "Sơn Trà", 
                "fk_MaQuanHuyen" => "6" 
            ],

            [
                "TenXaPhuong" => "Hòa Bắc", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hòa Châu", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hòa Liên", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hòa Nhơn", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hòa Phong", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hòa Phú", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hòa Phước", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hòa Sơn", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hòa Tiến", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hòa Xuân", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hòa Xuân Tây", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Hợp Phước", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Tam Phú", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Điện Hòa", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Điện Ngọc", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Điện Nam Bắc", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Điện Nam Trung", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Điện Nam Đông", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Điện Phương", 
                "fk_MaQuanHuyen" => "7" 
            ],
            [
                "TenXaPhuong" => "Điện Thắng Bắc", 
                "fk_MaQuanHuyen" => "7" 
            ],

            
        ];

        PhuongXa::insert($xaphuong);

    }
}
