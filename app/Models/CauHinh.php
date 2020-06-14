<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class CauHinh
{
    private $table  = "cau_hinh";
    public $ma_cau_hinh;
    public $ten_cau_hinh;

    public function get_all_cau_hinh()
    {
        $array  = DB::table("$this->table")->get();
        return $array;
    }

    public function insert_cau_hinh()
    {
        DB::table("$this->table")->insert([
            'ten_cau_hinh'=>$this->ten_cau_hinh,
        ]);
    }

    public function get_one_cau_hinh()
    {
        $array  = DB::table("$this->table")->where('ma_cau_hinh',$this->ma_cau_hinh)->limit(1)->get();
        return $array[0];
        /*dd($array);*/
    }

    public function update_cau_hinh()
    {
        DB::table("$this->table")->where('ma_cau_hinh',$this->ma_cau_hinh)->update([
            'ten_cau_hinh'=>$this->ten_cau_hinh
        ]);
    }
}
