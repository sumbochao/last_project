<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    protected $table = "admin";
    public $ma_admin;
    public $tai_khoan;
    public $mat_khau;
    public $anh_admin;
    public $ho_ten_admin;
    public $email;
    public $ngay_sinh;
    public $gioi_tinh;
    public $sdt;
    public $dia_chi;
    public $cap_do;

    public function getAllAdmin()
    {
        $array = DB::table($this->table)->get();
        return $array;
    }

    public function insertAdmin()
    {
        DB::table($this->table)->insert([
            'tai_khoan' => $this->tai_khoan,
            'mat_khau' => $this->mat_khau,
            'anh_admin' => $this->anh_admin,
            'ho_ten_admin' => $this->ho_ten_admin,
            'ngay_sinh' => $this->ngay_sinh,
            'gioi_tinh' => $this->gioi_tinh,
            'email' => $this->email,
            'sdt' => $this->sdt,
            'dia_chi' => $this->dia_chi,
            'cap_do' => $this->cap_do
        ]);
    }

    public function getOneAdmin()
    {
        $array = DB::table($this->table)
            ->where('ma_admin', $this->ma_admin)
            ->limit(1)
            ->get();
        return $array[0];
    }

    public function updateAdmin()
    {
        DB::table($this->table)->where('ma_admin', $this->ma_admin)->update([
            'ho_ten_admin' => $this->ho_ten_admin,
            'email' => $this->email
        ]);
    }

    public function deleteAdmin()
    {
        DB::table($this->table)
            ->where('ma_admin', $this->ma_admin)
            ->delete();
    }

    public function getOneAdminSignIn()
    {
        $array = DB::table($this->table)
            ->where('tai_khoan', $this->tai_khoan)
            ->limit(1)
            ->get();
        return $array;
    }
}
