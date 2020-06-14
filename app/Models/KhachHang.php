<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class KhachHang
{
    private $table  = 'khach_hang';
    public $ma_khach_hang;
    public $tai_khoan;
    public $mat_khau;
    public $anh_khach_hang;
    public $ho_ten_khach_hang;
    public $email;
    public $ngay_sinh;
    public $gioi_tinh;
    public $sdt;
    public $dia_chi;

    public function get_all_khach_hang()
    {
        $array  = DB::table($this->table)->get();
        return $array;
    }

    public function insert_khach_hang()
    {
        DB::table($this->table)->insert([
            'tai_khoan'=>$this->tai_khoan,
            'mat_khau'=>$this->mat_khau,
            'anh_khach_hang'=>$this->anh_khach_hang,
            'ho_ten_khach_hang'=>$this->ho_ten_khach_hang,
            'email'=>$this->email,
            'ngay_sinh'=>$this->ngay_sinh,
            'gioi_tinh'=>$this->gioi_tinh,
            'sdt'=>$this->sdt,
            'dia_chi'=>$this->dia_chi
        ]);
    }

    public function get_one_khach_hang()
    {
        $array  = DB::table($this->table)->where('ma_khach_hang',$this->ma_khach_hang)->limit(1)->get();
        return $array[0];
    }

    public function update_khach_hang()
    {
        DB::table($this->table)->where('ma_khach_hang',$this->ma_khach_hang)->update([
            'tai_khoan'=>$this->tai_khoan,
            'mat_khau'=>$this->mat_khau,
            'anh_khach_hang'=>$this->anh_khach_hang,
            'ho_ten_khach_hang'=>$this->ho_ten_khach_hang,
            'email'=>$this->email,
            'ngay_sinh'=>$this->ngay_sinh,
            'gioi_tinh'=>$this->gioi_tinh,
            'sdt'=>$this->sdt,
            'dia_chi'=>$this->dia_chi
        ]);
    }

    public function delete_khach_hang()
    {
        DB::table($this->table)->where('ma_khach_hang',$this->ma_khach_hang)->delete();
    }
}
