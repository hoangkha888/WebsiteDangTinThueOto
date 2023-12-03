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
        Schema::create('tindang', function (Blueprint $table) {
            $table->id('MaTinDang');
            $table->string('TieuDe');
            $table->string('MoTa');
            $table->string('GiaThue');
            $table->string('DiaChiNhanXe');
            $table->Boolean('TrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindang');
    }
};
