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
        Schema::create('flights', function (Blueprint $table) {
            $table->id('ma_san_pham');
            $table->string('anh_san_pham');
            $table->string('ten_san_pham');
            $table->text('mo_ta');
            $table->integer('ma_thuong_hieu');
            $table->integer('ma_cau_hinh');
            $table->boolean('gaming');
            $table->string('so_luong');
            $table->string('thong_so_ki_thuat');
            $table->float('gia');
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
        //
    }
}
