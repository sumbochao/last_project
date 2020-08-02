<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KhachHang extends Model
{
    protected $table = 'khach_hang';
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

    public function getAllKhachHang()
    {
        $array = DB::table($this->table)->get();
        return $array;
    }

    public function insertKhachHang()
    {
        DB::table($this->table)->insert([
            'tai_khoan' => $this->tai_khoan,
            'mat_khau' => $this->mat_khau,
            'anh_khach_hang' => $this->anh_khach_hang,
            'ho_ten_khach_hang' => $this->ho_ten_khach_hang,
            'email' => $this->email,
            'ngay_sinh' => $this->ngay_sinh,
            'gioi_tinh' => $this->gioi_tinh,
            'sdt' => $this->sdt,
            'dia_chi' => $this->dia_chi
        ]);
    }

    public function getOneKhachHang()
    {
        $array = DB::table($this->table)
            ->where('ma_khach_hang', $this->ma_khach_hang)
            ->limit(1)
            ->get();
        return $array[0];
    }

    public function updateKhachHang()
    {
        DB::table($this->table)
            ->where('ma_khach_hang', $this->ma_khach_hang)
            ->update([
                'tai_khoan' => $this->tai_khoan,
                'mat_khau' => $this->mat_khau,
                'anh_khach_hang' => $this->anh_khach_hang,
                'ho_ten_khach_hang' => $this->ho_ten_khach_hang,
                'email' => $this->email,
                'ngay_sinh' => $this->ngay_sinh,
                'gioi_tinh' => $this->gioi_tinh,
                'sdt' => $this->sdt,
                'dia_chi' => $this->dia_chi
            ]);
    }

    public function deleteKhachHang()
    {
        DB::table($this->table)
            ->where('ma_khach_hang', $this->ma_khach_hang)
            ->delete();
    }

    public function getOneKhachHangSignIn()
    {
        $array = DB::table($this->table)
            ->where('tai_khoan', $this->tai_khoan)
            ->limit(1)
            ->get();
        return $array;
    }
}
