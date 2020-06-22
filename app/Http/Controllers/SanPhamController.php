<?php

namespace App\Http\Controllers;

use App\Models\Cpu;
use App\Models\LoaiMay;
use App\Models\ManHinh;
use App\Models\OCung;
use App\Models\Ram;
use App\Models\SanPham;
use App\Models\HangSanXuat;
use App\Models\Vga;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function list_san_pham()
    {
        $san_pham   = new SanPham();
        $array_san_pham = $san_pham->get_all_san_pham();

        return view('list_san_pham',[
            'array_san_pham'=>$array_san_pham
        ]);
    }

    public function insert_san_pham()
    {
        $hang_san_xuat    = new HangSanXuat();
        $array_hang_san_xuat = $hang_san_xuat->get_all_hang_san_xuat();

        $loai_may   = new LoaiMay();
        $array_loai_may = $loai_may->get_all_loai_may();

        $man_hinh   = new ManHinh();
        $array_man_hinh = $man_hinh->get_all_man_hinh();

        $ram    = new Ram();
        $array_ram  = $ram->get_all_ram();

        $cpu   = new Cpu();
        $array_cpu = $cpu->get_all_cpu();

        $vga    = new Vga();
        $array_vga  = $vga->get_all_vga();

        $o_cung = new OCung();
        $array_o_cung   = $o_cung->get_all_o_cung();

        return view('insert_san_pham',[
            'array_hang_san_xuat'=>$array_hang_san_xuat,
            'array_loai_may'=>$array_loai_may,
            'array_man_hinh'=>$array_man_hinh,
            'array_ram'=>$array_ram,
            'array_cpu'=>$array_cpu,
            'array_vga'=>$array_vga,
            'array_o_cung'=>$array_o_cung
        ]);
    }

    public function process_insert_san_pham(Request $request)
    {
        $san_pham   = new SanPham();
        $san_pham->anh_san_pham = $request->anh_san_pham;
        $san_pham->ten_san_pham = $request->get('ten_san_pham');
        $san_pham->mo_ta = $request->get('mo_ta');
        $san_pham->ma_hang_san_xuat = $request->get('ma_hang_san_xuat');
        $san_pham->ma_loai_may = $request->get('ma_loai_may');
        $san_pham->ma_man_hinh = $request->get('ma_man_hinh');
        $san_pham->ma_ram = $request->get('ma_ram');
        $san_pham->ma_cpu = $request->get('ma_cpu');
        $san_pham->ma_vga = $request->get('ma_vga');
        $san_pham->ma_o_cung = $request->get('ma_o_cung');
        $san_pham->so_luong = $request->get('so_luong');
        $san_pham->gia = $request->get('gia');
        $san_pham->insert_san_pham();

        return redirect()->route('list_san_pham');
    }

    public function update_san_pham($id)
    {
        $hang_san_xuat    = new HangSanXuat();
        $array_hang_san_xuat = $hang_san_xuat->get_all_hang_san_xuat();

        $loai_may   = new LoaiMay();
        $array_loai_may = $loai_may->get_all_loai_may();

        $man_hinh   = new ManHinh();
        $array_man_hinh = $man_hinh->get_all_man_hinh();

        $ram    = new Ram();
        $array_ram  = $ram->get_all_ram();

        $cpu   = new Cpu();
        $array_cpu = $cpu->get_all_cpu();

        $vga    = new Vga();
        $array_vga  = $vga->get_all_vga();

        $o_cung = new OCung();
        $array_o_cung   = $o_cung->get_all_o_cung();

        $san_pham   = new SanPham();
        $san_pham->ma_san_pham  = $id;
        $san_pham   = $san_pham->get_one_san_pham();

        return view('update_san_pham',[
            'array_hang_san_xuat'=>$array_hang_san_xuat,
            'array_loai_may'=>$array_loai_may,
            'array_man_hinh'=>$array_man_hinh,
            'array_ram'=>$array_ram,
            'array_cpu'=>$array_cpu,
            'array_vga'=>$array_vga,
            'array_o_cung'=>$array_o_cung,
            'san_pham'=>$san_pham
        ]);
    }

    public function process_update_san_pham(Request $request,$id)
    {
        $san_pham   = new SanPham();
        $san_pham->ma_san_pham  = $id;
        $san_pham->anh_san_pham = $request->anh_san_pham;
        $san_pham->ten_san_pham = $request->get('ten_san_pham');
        $san_pham->mo_ta = $request->get('mo_ta');
        $san_pham->ma_hang_san_xuat = $request->get('ma_hang_san_xuat');
        $san_pham->ma_loai_may = $request->get('ma_loai_may');
        $san_pham->ma_man_hinh = $request->get('ma_man_hinh');
        $san_pham->ma_ram = $request->get('ma_ram');
        $san_pham->ma_cpu = $request->get('ma_cpu');
        $san_pham->ma_vga = $request->get('ma_vga');
        $san_pham->ma_o_cung = $request->get('ma_o_cung');
        $san_pham->so_luong = $request->get('so_luong');
        $san_pham->gia = $request->get('gia');
        $san_pham->update_san_pham();

        return redirect()->route('list_san_pham');
    }

    public function delete_san_pham($id)
    {
        $san_pham   = new SanPham();
        $san_pham->ma_san_pham  = $id;
        $san_pham->delete_san_pham();

        return redirect()->route('list_san_pham');
    }
}
