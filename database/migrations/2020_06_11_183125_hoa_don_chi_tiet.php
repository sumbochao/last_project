<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HoaDonChiTiet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don_chi_tiet', function (Blueprint $table) {
            $table->id('ma_hoa_don_chi_tiet');
            $table->string('ma_hoa_don',100);
            $table->string('ma_san_pham',100);
            $table->integer('so_luong');
            $table->float('gia');
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
