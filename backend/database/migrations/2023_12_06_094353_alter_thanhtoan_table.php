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
        Schema::table('thanhtoan', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_MaDatXe');
 
             $table->foreign('fk_MaDatXe')->references('MaDatXe')->on('datxe');
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
