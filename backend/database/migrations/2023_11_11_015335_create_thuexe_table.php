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
        Schema::create('thuexe', function (Blueprint $table) {
            $table->id();
            $table->date('ngaynhan');
            $table->date('ngaytra');
            $table->string('diachigiaoxe');
            $table->boolean('trangthaiduyet');
            $table->boolean('trangthaihuy');
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
        Schema::dropIfExists('thuexe');
    }
};
