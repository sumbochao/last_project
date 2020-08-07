<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachHangTable extends Migration
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
            $table->string('tai_khoan',100)->unique();
            $table->string('mat_khau',100);
            $table->text('anh_khach_hang')->nullable();
            $table->string('ho_ten_khach_hang');
            $table->string('email')->unique();
            $table->date('ngay_sinh');
            $table->boolean('gioi_tinh');
            $table->string('sdt');
            $table->text('dia_chi');
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
        Schema::dropIfExists('khach_hang');
    }
}
