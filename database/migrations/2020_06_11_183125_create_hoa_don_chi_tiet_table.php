<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonChiTietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don_chi_tiet', function (Blueprint $table) {
            $table->bigInteger('ma_hoa_don')->unsigned();
            $table->bigInteger('ma_san_pham')->unsigned();
            $table->bigInteger('so_luong');
            $table->string('gia');
            $table->primary(['ma_hoa_don','ma_san_pham']);
            $table->foreign('ma_hoa_don')->references('ma_hoa_don')->on('hoa_don');
            $table->foreign('ma_san_pham')->references('ma_san_pham')->on('san_pham');
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
        Schema::dropIfExists('hoa_don_chi_tiet');
    }
}
