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
        Schema::table('quanhuyen', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_MaXaPhuong');
         
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
