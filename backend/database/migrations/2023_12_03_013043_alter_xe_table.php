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
        Schema::table('xe', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_MaHangXe');
            $table->unsignedBigInteger('fk_MaNhienLieu');

            $table->foreign('fk_MaHangXe')->references('MaHangXe')->on('hangxe');
            $table->foreign('fk_MaNhienLieu')->references('MaNhienLieu')->on('nhienlieu');
        
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
