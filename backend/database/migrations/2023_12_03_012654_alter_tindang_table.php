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
        Schema::table('tindang', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_MaNguoiDung');
            $table->unsignedBigInteger('fk_MaXe');
            $table->unsignedBigInteger('fk_MaHinhAnh');
            $table->unsignedBigInteger('fk_MaXaPhuong');

            $table->foreign('fk_MaNguoiDung')->references('MaNguoiDung')->on('nguoidung');
            $table->foreign('fk_MaXe')->references('MaXe')->on('xe');
            $table->foreign('fk_MaHinhAnh')->references('MaHinhAnh')->on('hinhanh');
            $table->foreign('fk_MaXaPhuong')->references('MaXaPhuong')->on('xaphuong');
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
