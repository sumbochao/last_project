<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class OCung
{
    private $table  = 'o_cung';
    public $ma_o_cung;
    public $loai_o_cung;
    public $dung_luong_o_cung;

    public function get_all_o_cung()
    {
        $array  = DB::table($this->table)->get();
        return $array;
    }

    public function insert_o_cung()
    {
        DB::table($this->table)->insert([
            'loai_o_cung'=>$this->loai_o_cung,
            'dung_luong_o_cung'=>$this->dung_luong_o_cung
        ]);
    }

    public function get_one_o_cung()
    {
        $array  = DB::table($this->table)->where('ma_o_cung',$this->ma_o_cung)->limit(1)->get();
        return $array[0];
    }

    public function update_o_cung()
    {
        DB::table($this->table)->where('ma_o_cung',$this->ma_o_cung)->update([
            'loai_o_cung'=>$this->loai_o_cung,
            'dung_luong_o_cung'=>$this->dung_luong_o_cung
        ]);
    }
}
