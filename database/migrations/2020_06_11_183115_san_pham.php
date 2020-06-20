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
            $table->text('anh_san_pham');
            $table->string('ten_san_pham');
            $table->text('mo_ta');
            $table->bigInteger('ma_hang_san_xuat')->unsigned();
            $table->bigInteger('ma_loai_may')->unsigned();
            $table->bigInteger('ma_man_hinh')->unsigned();
            $table->bigInteger('ma_ram')->unsigned();
            $table->bigInteger('ma_cpu')->unsigned();
            $table->bigInteger('ma_vga')->unsigned();
            $table->bigInteger('ma_o_cung')->unsigned();
            $table->string('so_luong');
            $table->string('gia');
            $table->foreign('ma_hang_san_xuat')->references('ma_hang_san_xuat')->on('hang_san_xuat');
            $table->foreign('ma_loai_may')->references('ma_loai_may')->on('loai_may');
            $table->foreign('ma_man_hinh')->references('ma_man_hinh')->on('man_hinh');
            $table->foreign('ma_ram')->references('ma_ram')->on('ram');
            $table->foreign('ma_cpu')->references('ma_cpu')->on('cpu');
            $table->foreign('ma_vga')->references('ma_vga')->on('vga');
            $table->foreign('ma_o_cung')->references('ma_o_cung')->on('o_cung');
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
