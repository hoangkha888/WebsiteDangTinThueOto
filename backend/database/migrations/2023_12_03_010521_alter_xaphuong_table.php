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
        Schema::table('xaphuong', function (Blueprint $table) {
            // $table->unsignedBigInteger('fk_MaQuanHuyen');
         
            $table->foreign('fk_MaQuanHuyen')->references('MaQuanHuyen')->on('quanhuyen');
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
