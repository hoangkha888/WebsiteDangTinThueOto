<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DanhgiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("danhgia")->insert([
            "NoiDung" => "xe cho thuê giá rẻ, hợp lí",
            "fk_MaNguoiDung" => "1",
            "fk_MaTinDang" => "3"

        ]);
    }
}
