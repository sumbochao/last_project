<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class LoaiMay
{
    private $table = 'loai_may';
    public $ma_loai_may;
    public $ten_loai_may;

    public function get_all_loai_may()
    {
        $array  = DB::table($this->table)->get();
        return $array;
    }

    public function insert_loai_may()
    {
        DB::table($this->table)->insert([
            'ten_loai_may'=>$this->ten_loai_may
        ]);
    }

    public function get_one_loai_may()
    {
        $array  = DB::table($this->table)->where('ma_loai_may',$this->ma_loai_may)->limit(1)->get();
        return $array[0];
    }

    public function update_loai_may()
    {
        DB::table($this->table)->where('ma_loai_may',$this->ma_loai_may)->update([
            'ten_loai_may'=>$this->ten_loai_may
        ]);
    }
}
