<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonTable extends Migration
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
            $table->bigInteger('ma_khach_hang')->unsigned();
            $table->bigInteger('ma_thanh_toan')->unsigned();
            $table->string('tong_tien');
            $table->boolean('tinh_trang');
            $table->foreign('ma_khach_hang')->references('ma_khach_hang')->on('khach_hang');
            $table->foreign('ma_thanh_toan')->references('ma_thanh_toan')->on('thanh_toan');
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
        Schema::dropIfExists('hoa_don');
    }
}
