<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Vga
{
    private $table  = 'vga';
    public $ma_vga;
    public $loai_vga;
    public $ten_vga;
    public $dung_luong_vga;

    public function get_all_vga()
    {
        $array  = DB::table($this->table)->get();
        return $array;
    }

    public function insert_vga()
    {
        DB::table($this->table)->insert([
            'loai_vga'=>$this->loai_vga,
            'ten_vga'=>$this->ten_vga,
            'dung_luong_vga'=>$this->dung_luong_vga
        ]);
    }

    public function get_one_vga()
    {
        $array  = DB::table($this->table)->where('ma_vga',$this->ma_vga)->limit(1)->get();
        return $array[0];
    }

    public function update_vga()
    {
        DB::table($this->table)->where('ma_vga',$this->ma_vga)->update([
            'loai_vga'=>$this->loai_vga,
            'ten_vga'=>$this->ten_vga,
            'dung_luong_vga'=>$this->dung_luong_vga
        ]);
    }
}
