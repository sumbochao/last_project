<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ThuongHieu
{
    private $table  = "thuong_hieu";
    public $ma_thuong_hieu;
    public $ten_thuong_hieu;

    public function get_all_thuong_hieu()
    {
        $array  = DB::table("$this->table")->get();
        return $array;
    }

    public function insert_thuong_hieu()
    {
        DB::table("$this->table")->insert([
            'ten_thuong_hieu'=>$this->ten_thuong_hieu,
        ]);
    }

    public function get_one_thuong_hieu()
    {
        $array  = DB::table("$this->table")->where('ma_thuong_hieu',$this->ma_thuong_hieu)->limit(1)->get();
        return $array[0];
        /*dd($array);*/
    }

    public function update_thuong_hieu()
    {
        DB::table("$this->table")->where('ma_thuong_hieu',$this->ma_thuong_hieu)->update([
            'ten_thuong_hieu'=>$this->ten_thuong_hieu
        ]);
    }
}
