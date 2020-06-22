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
    public $ma_hang_san_xuat;
    public $ma_loai_may;
    public $ma_man_hinh;
    public $ma_ram;
    public $ma_cpu;
    public $ma_vga;
    public $ma_o_cung;
    public $so_luong;
    public $gia;

    public function get_all_san_pham()
    {
        $array  = DB::table($this->table)
            ->leftJoin('hang_san_xuat',"$this->table.ma_hang_san_xuat",'=','hang_san_xuat.ma_hang_san_xuat')
            ->leftJoin('loai_may',"$this->table.ma_loai_may",'=','loai_may.ma_loai_may')
            ->leftJoin('man_hinh',"$this->table.ma_man_hinh",'=','man_hinh.ma_man_hinh')
            ->leftJoin('ram',"$this->table.ma_ram",'=','ram.ma_ram')
            ->leftJoin('cpu',"$this->table.ma_cpu",'=','cpu.ma_cpu')
            ->leftJoin('vga',"$this->table.ma_vga",'=','vga.ma_vga')
            ->leftJoin('o_cung',"$this->table.ma_o_cung",'=','o_cung.ma_o_cung')
            ->get();
        return $array;
    }

    public function insert_san_pham()
    {
        DB::table($this->table)->insert([
            'anh_san_pham'=>$this->anh_san_pham,
            'ten_san_pham'=>$this->ten_san_pham,
            'mo_ta'=>$this->mo_ta,
            'ma_hang_san_xuat'=>$this->ma_hang_san_xuat,
            'ma_loai_may'=>$this->ma_loai_may,
            'ma_man_hinh'=>$this->ma_man_hinh,
            'ma_ram'=>$this->ma_ram,
            'ma_cpu'=>$this->ma_cpu,
            'ma_vga'=>$this->ma_vga,
            'ma_o_cung'=>$this->ma_o_cung,
            'so_luong'=>$this->so_luong,
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
                'ma_hang_san_xuat'=>$this->ma_hang_san_xuat,
                'ma_loai_may'=>$this->ma_loai_may,
                'ma_man_hinh'=>$this->ma_man_hinh,
                'ma_ram'=>$this->ma_ram,
                'ma_cpu'=>$this->ma_cpu,
                'ma_vga'=>$this->ma_vga,
                'ma_o_cung'=>$this->ma_o_cung,
                'so_luong'=>$this->so_luong,
                'gia'=>$this->gia
            ]);
    }

    public function delete_san_pham()
    {
        DB::table($this->table)->where('ma_san_pham',$this->ma_san_pham)->delete();
    }
}
