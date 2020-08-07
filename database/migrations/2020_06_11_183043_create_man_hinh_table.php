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
            $table->string('kich_co');
            $table->string('do_phan_giai')->nullable();
            $table->string('tan_so_man_hinh')->nullable();
            $table->string('tam_nen')->nullable();
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
