<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->id('ma_hoa_don');
            $table->integer('ma_khach_hang');
            $table->integer('ma_van_chuyen');
            $table->integer('ma_thanh_toan');
            $table->float('tong_tien');
            $table->boolean('tinh_trang');
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
