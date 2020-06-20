<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class HangSanXuat
{
    private $table  = "hang_san_xuat";
    public $ma_hang_san_xuat;
    public $ten_hang_san_xuat;

    public function get_all_hang_san_xuat()
    {
        $array  = DB::table("$this->table")->get();
        return $array;
    }

    public function insert_hang_san_xuat()
    {
        DB::table("$this->table")->insert([
            'ten_hang_san_xuat'=>$this->ten_hang_san_xuat,
        ]);
    }

    public function get_one_hang_san_xuat()
    {
        $array  = DB::table("$this->table")->where('ma_hang_san_xuat',$this->ma_hang_san_xuat)->limit(1)->get();
        return $array[0];
        /*dd($array);*/
    }

    public function update_hang_san_xuat()
    {
        DB::table("$this->table")->where('ma_hang_san_xuat',$this->ma_hang_san_xuat)->update([
            'ten_hang_san_xuat'=>$this->ten_hang_san_xuat
        ]);
    }
}
