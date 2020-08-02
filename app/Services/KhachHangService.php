<?php


namespace App\Services;


use App\Models\KhachHang;
use Illuminate\Support\Facades\Hash;

class KhachHangService
{
    private $khachHang;

    public function __construct(KhachHang $khachHang)
    {
        $this->khachHang = $khachHang;
    }

    public function listKhachHang()
    {
        $arrayKhachHang = $this->khachHang->getAllKhachHang();

        return view('ListKhachHang', [
            'arrayKhachHang' => $arrayKhachHang,
        ]);
    }

    public function processInsertKhachHang($params)
    {
        $this->khachHang->tai_khoan         = $params['taiKhoan'];
        $this->khachHang->mat_khau          = Hash::make($params['matKhau']);
        $this->khachHang->ho_ten_khach_hang = $params['hoTenKhachHang'];
        $this->khachHang->email             = $params['email'];
        $this->khachHang->ngay_sinh         = $params['ngaySinh'];
        $this->khachHang->gioi_tinh         = $params['gioiTinh'];
        $this->khachHang->sdt               = $params['sdt'];
        $this->khachHang->dia_chi           = $params['diaChi'];
        $this->khachHang->insertKhachHang();

        return redirect()->route('viewGioHang');
    }

    public function updateKhachHang($id)
    {
        $this->khachHang->ma_khach_hang = $id;
        $khachHang = $this->khachHang->getOneKhachHang();

        return view('UpdateKhachHang', [
            'khachHang' => $khachHang,
        ]);
    }

    public function processUpdateKhachHang($params, $id)
    {
        $this->khachHang->ma_khach_hang     = $id;
        $this->khachHang->tai_khoan         = $params['taiKhoan'];
        $this->khachHang->mat_khau          = Hash::make($params['matKhau']);
        $this->khachHang->ho_ten_khach_hang = $params['hoTenKhachHang'];
        $this->khachHang->email             = $params['email'];
        $this->khachHang->ngay_sinh         = $params['ngaySinh'];
        $this->khachHang->gioi_tinh         = $params['gioiTinh'];
        $this->khachHang->sdt               = $params['sdt'];
        $this->khachHang->dia_chi           = $params['diaChi'];
        $this->khachHang->updateKhachHang();

        return redirect()->route('listKhachHang');
    }

    public function deleteKhachHang($id)
    {
        $this->khachHang->ma_khach_hang = $id;
        $this->khachHang->deleteKhachHang();

        return redirect()->route('listKhachHang');
    }
}
