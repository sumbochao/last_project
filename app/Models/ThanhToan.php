<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ThanhToan
{
    private $table  = 'thanh_toan';
    public $ma_thanh_toan;
    public $phuong_thuc_thanh_toan;

    public function get_all_thanh_toan()
    {
        $array  = DB::table($this->table)->get();
        return $array;
    }

    public function insert_thanh_toan()
    {
        DB::table($this->table)->insert([
            'phuong_thuc_thanh_toan'=>$this->phuong_thuc_thanh_toan
        ]);
    }

    public function get_one_thanh_toan()
    {
        $array  = DB::table($this->table)->where('ma_thanh_toan',$this->ma_thanh_toan)->get();
        return $array[0];
    }

    public function update_thanh_toan()
    {
        DB::table($this->table)->where('ma_thanh_toan',$this->ma_thanh_toan)->update([
            'phuong_thuc_thanh_toan'=>$this->phuong_thuc_thanh_toan
        ]);
    }

    public function delete_thanh_toan()
    {
        DB::table($this->table)->where('ma_thanh_toan',$this->ma_thanh_toan)->delete();
    }
}
