<?php

namespace App\Http\Controllers;

use App\Models\CauHinh;
use App\Models\SanPham;
use App\Models\ThuongHieu;
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
        $cau_hinh   = new CauHinh();
        $array_cau_hinh = $cau_hinh->get_all_cau_hinh();

        $thuong_hieu    = new ThuongHieu();
        $array_thuong_hieu = $thuong_hieu->get_all_thuong_hieu();

        return view('insert_san_pham',[
            'array_cau_hinh'=>$array_cau_hinh,
            'array_thuong_hieu'=>$array_thuong_hieu
        ]);
    }

    public function process_insert_san_pham(Request $request)
    {
        $san_pham   = new SanPham();
        $san_pham->anh_san_pham = $request->anh_san_pham;
        $san_pham->ten_san_pham = $request->ten_san_pham;
        $san_pham->ma_cau_hinh = $request->ma_cau_hinh;
        $san_pham->ma_thuong_hieu = $request->ma_thuong_hieu;
        $san_pham->mo_ta = $request->mo_ta;
        $san_pham->gaming = $request->gaming;
        $san_pham->so_luong = $request->so_luong;
        $san_pham->gia = $request->gia;
        $san_pham->thong_so_ki_thuat = $request->thong_so_ki_thuat;
        $san_pham->insert_san_pham();

        return redirect()->route('list_san_pham');
    }
}
