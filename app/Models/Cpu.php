<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cpu extends Model
{
    protected $table = "cpu";
    public $ma_cpu;
    public $ten_cpu;
    public $tan_so_cpu;
    public $bo_nho_cache;
    public $dong_cpu;

    public function getAllCpu()
    {
        $array = DB::table($this->table)->get();
        return $array;
    }

    public function insertCpu()
    {
        DB::table($this->table)->insert([
            'ten_cpu' => $this->ten_cpu,
            'tan_so_cpu' => $this->tan_so_cpu,
            'bo_nho_cache' => $this->bo_nho_cache,
            'dong_cpu' => $this->dong_cpu,
        ]);
    }

    public function getOneCpu()
    {
        $array = DB::table($this->table)
            ->where('ma_cpu', $this->ma_cpu)
            ->limit(1)
            ->get();
        return $array[0];
        /*dd($array);*/
    }

    public function updateCpu()
    {
        DB::table($this->table)
            ->where('ma_cpu', $this->ma_cpu)
            ->update([
                'ten_cpu' => $this->ten_cpu,
                'tan_so_cpu' => $this->tan_so_cpu,
                'bo_nho_cache' => $this->bo_nho_cache,
                'dong_cpu' => $this->dong_cpu
            ]);
    }
}
