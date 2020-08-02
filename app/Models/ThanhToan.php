<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ThanhToan extends Model
{
    protected $table = 'thanh_toan';
    public $ma_thanh_toan;
    public $phuong_thuc_thanh_toan;

    public function getAllThanhToan()
    {
        $array = DB::table($this->table)->get();
        return $array;
    }

    public function insertThanhToan()
    {
        DB::table($this->table)->insert([
            'phuong_thuc_thanh_toan' => $this->phuong_thuc_thanh_toan
        ]);
    }

    public function getOneThanhToan()
    {
        $array = DB::table($this->table)
            ->where('ma_thanh_toan', $this->ma_thanh_toan)
            ->get();
        return $array[0];
    }

    public function updateThanhToan()
    {
        DB::table($this->table)
            ->where('ma_thanh_toan', $this->ma_thanh_toan)
            ->update([
                'phuong_thuc_thanh_toan' => $this->phuong_thuc_thanh_toan
            ]);
    }

    public function deleteThanhToan()
    {
        DB::table($this->table)
            ->where('ma_thanh_toan', $this->ma_thanh_toan)
            ->delete();
    }
}
