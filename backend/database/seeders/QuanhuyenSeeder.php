<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuanhuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("quanhuyen")->insert([
            "TenQuanHuyen" => "Hải Châu",
            "fk_MaXaPhuong" => "1",
        ]);
    }
}
