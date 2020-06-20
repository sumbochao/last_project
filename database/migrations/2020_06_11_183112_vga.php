<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vga', function (Blueprint $table) {
            $table->id('ma_vga');
            $table->string('loai_vga',50);
            $table->string('ten_vga',50);
            $table->string('dung_luong',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vga');
    }
}
