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
        Schema::table('xetinhnang', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_MaXe');
            $table->unsignedBigInteger('fk_MaTinhNang');

            $table->foreign('fk_MaXe')->references('MaXe')->on('xe');
            $table->foreign('fk_MaTinhNang')->references('MaTinhNang')->on('tinhnang');
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
