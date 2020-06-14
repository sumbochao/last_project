<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SanPham
{
    private $table = 'san_pham';
    public $ma_san_pham;
    public $anh_san_pham;
    public $ten_san_pham;
    public $mo_ta;
    public $ma_thuong_hieu;
    public $ma_cau_hinh;
    public $gaming;
    public $so_luong;
    public $thong_so_ki_thuat;
    public $gia;

    public function get_all_san_pham()
    {
        $array  = DB::table($this->table)
            ->leftJoin('thuong_hieu',"$this->table.ma_thuong_hieu",'=','thuong_hieu.ma_thuong_hieu')
            ->leftJoin('cau_hinh',"$this->table.ma_cau_hinh",'=','cau_hinh.ma_cau_hinh')
            ->get();
        return $array;
    }

    public function insert_san_pham()
    {
        DB::table($this->table)->insert([
            'anh_san_pham'=>$this->anh_san_pham,
            'ten_san_pham'=>$this->ten_san_pham,
            'mo_ta'=>$this->mo_ta,
            'ma_thuong_hieu'=>$this->ma_thuong_hieu,
            'ma_cau_hinh'=>$this->ma_cau_hinh,
            'gaming'=>$this->gaming,
            'so_luong'=>$this->so_luong,
            'thong_so_ki_thuat'=>$this->thong_so_ki_thuat,
            'gia'=>$this->gia
        ]);
    }

    public function get_one_san_pham()
    {
        $array  = DB::table($this->table)
                    ->where('ma_san_pham',$this->ma_san_pham)
                    ->limit(1)
                    ->get();
        return $array[0];
    }

    public function update_san_pham()
    {
        DB::table($this->table)
            ->where('ma_san_pham',$this->ma_san_pham)
            ->update([
                'anh_san_pham'=>$this->anh_san_pham,
                'ten_san_pham'=>$this->ten_san_pham,
                'mo_ta'=>$this->mo_ta,
                'ma_thuong_hieu'=>$this->ma_thuong_hieu,
                'ma_cau_hinh'=>$this->ma_cau_hinh,
                'gaming'=>$this->gaming,
                'so_luong'=>$this->so_luong,
                'thong_so_ki_thuat'=>$this->thong_so_ki_thuat,
                'gia'=>$this->gia
            ]);
    }

    public function delete_san_pham()
    {
        DB::table($this->table)->where('ma_san_pham',$this->ma_san_pham)->delete();
    }
}
