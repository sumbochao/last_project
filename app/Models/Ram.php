<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Ram
{
    private $table  = 'ram';
    public $ma_ram;
    public $loai_ram;
    public $dung_luong_ram;
    public $tan_so_ram;

    public function get_all_ram()
    {
        $array  = DB::table($this->table)->get();
        return $array;
    }

    public function insert_ram()
    {
        DB::table($this->table)->insert([
            'loai_ram'=>$this->loai_ram,
            'dung_luong_ram'=>$this->dung_luong_ram,
            'tan_so_ram'=>$this->tan_so_ram
        ]);
    }

    public function get_one_ram()
    {
        $array  = DB::table($this->table)->where('ma_ram',$this->ma_ram)->limit(1)->get();
        return $array[0];
    }

    public function update_ram()
    {
        DB::table($this->table)->where('ma_ram',$this->ma_ram)->update([
            'loai_ram'=>$this->loai_ram,
            'dung_luong_ram'=>$this->dung_luong_ram,
            'tan_so_ram'=>$this->tan_so_ram
        ]);
    }
}
