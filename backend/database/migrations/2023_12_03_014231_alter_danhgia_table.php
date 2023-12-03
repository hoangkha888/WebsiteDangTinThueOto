<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('danhgia', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_MaNguoiDung');
            $table->unsignedBigInteger('fk_MaTinDang');

            $table->foreign('fk_MaNguoiDung')->references('MaNguoiDung')->on('nguoidung');
            $table->foreign('fk_MaTinDang')->references('MaTinDang')->on('tindang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
