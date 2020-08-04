<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManHinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('man_hinh', function (Blueprint $table) {
            $table->id('ma_man_hinh');
            $table->string('kich_co',50);
            $table->string('do_phan_giai',50)->nullable();
            $table->string('tan_so_man_hinh',50)->nullable();
            $table->string('tam_nen',50)->nullable();
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
        Schema::dropIfExists('man_hinh');
    }
}
