<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id('ma_san_pham');
            $table->string('anh_san_pham');
            $table->string('ten_san_pham');
            $table->text('mo_ta');
            $table->bigInteger('ma_thuong_hieu')->unsigned();
            $table->bigInteger('ma_cau_hinh')->unsigned();
            $table->boolean('gaming');
            $table->string('so_luong');
            $table->string('thong_so_ki_thuat');
            $table->float('gia');
            $table->foreign('ma_thuong_hieu')->references('ma_thuong_hieu')->on('thuong_hieu');
            $table->foreign('ma_cau_hinh')->references('ma_cau_hinh')->on('cau_hinh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('san_pham');
    }
}
