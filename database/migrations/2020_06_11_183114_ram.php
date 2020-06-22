<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ram', function (Blueprint $table) {
            $table->id('ma_ram');
            $table->string('loai_ram',50);
            $table->string('dung_luong_ram',50);
            $table->string('tan_so_ram',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ram');
    }
}
