<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VanChuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('van_chuyen', function (Blueprint $table) {
            $table->id('ma_van_chuyen');
            $table->string('ho_ten_nguoi_nhan',100);
            $table->text('dia_chi_nguoi_nhan');
            $table->string('sdt_nguoi_nhan');
            $table->string('email_nguoi_nhan',100)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('van_chuyen');
    }
}
