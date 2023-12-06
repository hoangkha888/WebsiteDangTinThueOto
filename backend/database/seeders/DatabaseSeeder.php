<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            NguoidungSeeder::class,
            // HinhanhSeeder::class,
            // NhienlieuSeeder::class,
            // XaphuongSeeder::class,
            // QuanhuyenSeeder::class,
            // TinhnangSeeder::class,
            // HangxeSeeder::class,
            // XeSeeder::class,
            // TindangSeeder::class,
            // DatxeSeeder::class,
            //DanhgiaSeeder::class,
            //QuyenTruyCapSeeder::class
        ]);
    }
}
