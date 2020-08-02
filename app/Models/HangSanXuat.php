<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HangSanXuat extends Model
{
    protected $table = "hang_san_xuat";
    public $ma_hang_san_xuat;
    public $ten_hang_san_xuat;

    public function getAllHangSanXuat()
    {
        $array = DB::table($this->table)->get();
        return $array;
    }

    public function insertHangSanXuat()
    {
        DB::table($this->table)->insert([
            'ten_hang_san_xuat' => $this->ten_hang_san_xuat,
        ]);
    }

    public function getOneHangSanXuat()
    {
        $array = DB::table($this->table)
            ->where('ma_hang_san_xuat', $this->ma_hang_san_xuat)
            ->limit(1)
            ->get();
        return $array[0];
        /*dd($array);*/
    }

    public function updateHangSanXuat()
    {
        DB::table($this->table)
            ->where('ma_hang_san_xuat', $this->ma_hang_san_xuat)
            ->update([
                'ten_hang_san_xuat' => $this->ten_hang_san_xuat
            ]);
    }
}
