<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id('ma_admin');
            $table->string('tai_khoan',100);
            $table->string('mat_khau',100);
            $table->text('anh_admin');
            $table->string('ho_ten_admin',100);
            $table->string('email',100)->unique();
            $table->date('ngay_sinh');
            $table->boolean('gioi_tinh');
            $table->string('sdt',12);
            $table->text('dia_chi');
            $table->float('cap_do');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admin');
    }
}
