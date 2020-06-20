<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Admin
{
    private $table  = "admin";
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

    public function get_all_admin()
    {
        $array  = DB::table("$this->table")->get();
        return $array;
    }

    public function insert_admin()
    {
        DB::table("$this->table")->insert([
            'tai_khoan'=>$this->tai_khoan,
            'mat_khau'=>$this->mat_khau,
            'anh_admin'=>$this->anh_admin,
            'ho_ten_admin'=>$this->ho_ten_admin,
            'ngay_sinh'=>$this->ngay_sinh,
            'gioi_tinh'=>$this->gioi_tinh,
            'email'=>$this->email,
            'sdt'=>$this->sdt,
            'dia_chi'=>$this->dia_chi,
            'cap_do'=>$this->cap_do,
        ]);
    }

    public function get_one_admin()
    {
        $array  = DB::table("$this->table")->where('ma_admin',$this->ma_admin)->limit(1)->get();
        return $array[0];
        /*dd($array);*/
    }

    public function update_admin()
    {
        DB::table("$this->table")->where('ma_admin',$this->ma_admin)->update([
            'ho_ten_admin'=>$this->ho_ten_admin,
            'email'=>$this->email
        ]);
    }

    public function delete_admin()
    {
        DB::table("$this->table")->where('ma_admin',$this->ma_admin)->delete();
    }

    public function get_one_admin_sign_in()
    {
        $array  = DB::table("$this->table")
                    ->where('tai_khoan',$this->tai_khoan)
                    ->limit(1)
                    ->get();
//        dd($array);
        return $array;
    }
}
