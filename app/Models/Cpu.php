<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Cpu
{
    private $table  = "cpu";
    public $ma_cpu;
    public $ten_cpu;
    public $tan_so;
    public $bo_nho_cache;
    public $dong_cpu;

    public function get_all_cpu()
    {
        $array  = DB::table("$this->table")->get();
        return $array;
    }

    public function insert_cpu()
    {
        DB::table("$this->table")->insert([
            'ten_cpu'=>$this->ten_cpu,
            'tan_so'=>$this->tan_so,
            'bo_nho_cache'=>$this->bo_nho_cache,
            'dong_cpu'=>$this->dong_cpu,
        ]);
    }

    public function get_one_cpu()
    {
        $array  = DB::table("$this->table")->where('ma_cpu',$this->ma_cpu)->limit(1)->get();
        return $array[0];
        /*dd($array);*/
    }

    public function update_cpu()
    {
        DB::table("$this->table")->where('ma_cpu',$this->ma_cpu)->update([
            'ten_cpu'=>$this->ten_cpu,
            'tan_so'=>$this->tan_so,
            'bo_nho_cache'=>$this->bo_nho_cache,
            'dong_cpu'=>$this->dong_cpu
        ]);
    }
}
