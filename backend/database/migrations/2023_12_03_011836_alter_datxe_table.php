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
        Schema::table('datxe', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_MaNguoiDung');
            $table->unsignedBigInteger('fk_MaXe');
            $table->foreign('fk_MaNguoiDung')->references('MaNguoiDung')->on('nguoidung');
            $table->foreign('fk_MaXe')->references('MaXe')->on('xe');
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
