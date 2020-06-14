<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KhachHangController extends Controller
{
    public function list_khach_hang()
    {
        $khach_hang = new KhachHang();
        $array_khach_hang   = $khach_hang->get_all_khach_hang();

        return view('list_khach_hang',[
            'array_khach_hang'=>$array_khach_hang
        ]);
    }

    public function insert_khach_hang()
    {
        return view('insert_khach_hang');
    }

    public function process_insert_khach_hang(Request $request)
    {
        $khach_hang = new KhachHang();
        $khach_hang->tai_khoan  = $request->tai_khoan;
        $khach_hang->mat_khau  = Hash::make($request->mat_khau);
        $khach_hang->anh_khach_hang  = $request->anh_khach_hang;
        $khach_hang->ho_ten_khach_hang  = $request->ho_ten_khach_hang;
        $khach_hang->email  = $request->email;
        $khach_hang->ngay_sinh  = $request->ngay_sinh;
        $khach_hang->gioi_tinh  = $request->gioi_tinh;
        $khach_hang->sdt  = $request->sdt;
        $khach_hang->dia_chi  = $request->dia_chi;
        $khach_hang->insert_khach_hang();

        return redirect()->route('list_khach_hang');
    }

    public function update_khach_hang($id)
    {
        $khach_hang = new KhachHang();
        $khach_hang->ma_khach_hang  = $id;
        $khach_hang = $khach_hang->get_one_khach_hang();

        return view('update_khach_hang',[
            'khach_hang'=>$khach_hang
        ]);
    }

    public function process_update_khach_hang(Request $request,$id)
    {
        $khach_hang = new KhachHang();
        $khach_hang->ma_khach_hang  = $id;
        $khach_hang->tai_khoan  = $request->tai_khoan;
        $khach_hang->mat_khau  = Hash::make($request->mat_khau);
        $khach_hang->anh_khach_hang  = $request->anh_khach_hang;
        $khach_hang->ho_ten_khach_hang  = $request->ho_ten_khach_hang;
        $khach_hang->email  = $request->email;
        $khach_hang->ngay_sinh  = $request->ngay_sinh;
        $khach_hang->gioi_tinh  = $request->gioi_tinh;
        $khach_hang->sdt  = $request->sdt;
        $khach_hang->dia_chi  = $request->dia_chi;
        $khach_hang->update_khach_hang();

        return redirect()->route('list_khach_hang');
    }

    public function delete_khach_hang($id)
    {
        $khach_hang = new KhachHang();
        $khach_hang->ma_khach_hang  = $id;
        $khach_hang->delete_khach_hang();

        return redirect()->route('list_khach_hang');
    }
}
