<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vga extends Model
{
    protected $table = 'vga';
    public $ma_vga;
    public $loai_vga;
    public $ten_vga;
    public $dung_luong_vga;

    public function getAllVga()
    {
        $array = DB::table($this->table)->get();
        return $array;
    }

    public function insertVga()
    {
        DB::table($this->table)->insert([
            'loai_vga' => $this->loai_vga,
            'ten_vga' => $this->ten_vga,
            'dung_luong_vga' => $this->dung_luong_vga
        ]);
    }

    public function getOneVga()
    {
        $array = DB::table($this->table)
            ->where('ma_vga', $this->ma_vga)
            ->limit(1)
            ->get();
        return $array[0];
    }

    public function updateVga()
    {
        DB::table($this->table)
            ->where('ma_vga', $this->ma_vga)
            ->update([
                'loai_vga' => $this->loai_vga,
                'ten_vga' => $this->ten_vga,
                'dung_luong_vga' => $this->dung_luong_vga
            ]);
    }
}
