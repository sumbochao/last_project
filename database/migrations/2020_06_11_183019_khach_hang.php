<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->id('ma_khach_hang');
            $table->string('tai_khoan',100);
            $table->string('mat_khau',100);
            $table->text('anh_khach_hang');
            $table->string('ho_ten_khach_hang',100);
            $table->string('email',100);
            $table->date('ngay_sinh');
            $table->boolean('gioi_tinh');
            $table->string('sdt',12);
            $table->text('dia_chi');
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
