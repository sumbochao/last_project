<?php


namespace App\Services;


use App\Models\KhachHang;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

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

        $title            = 'Danh Sách Khách Hàng';
        $metaDescriptions = 'Danh sách toàn bộ khách hàng';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListKhachHang', [
            'arrayKhachHang'     => $arrayKhachHang,
            'title'              => $title,
            'metaDescriptions'   => $metaDescriptions,
            'metaKeywords'       => $metaKeywords,
            'urlCanonical'       => $urlCanonical,
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

        return redirect()->route('khachHangSignInOrSignUp')->with('success', 'Đăng ký thành công vui lòng tiến hành đăng nhập');
    }

    public function updateKhachHang($id)
    {
        $this->khachHang->ma_khach_hang = $id;
        $khachHang = $this->khachHang->getOneKhachHang();

        $title            = 'Sửa Khách Hàng';
        $metaDescriptions = 'Sửa tài khoản của khách hàng ' . $khachHang->ho_ten_khach_hang;
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateKhachHang', [
            'khachHang'          => $khachHang,
            'title'              => $title,
            'metaDescriptions'   => $metaDescriptions,
            'metaKeywords'       => $metaKeywords,
            'urlCanonical'       => $urlCanonical,
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

        return redirect()->route('listKhachHang')->with('success', 'Sửa khách hàng thành công');
    }

    public function deleteKhachHang($id)
    {
        $this->khachHang->ma_khach_hang = $id;
        $this->khachHang->deleteKhachHang();

        return redirect()->route('listKhachHang')->with('success', 'Xóa khách hàng thành công');
    }

    public function searchKhachHang($params)
    {
        $this->khachHang->ho_ten_khach_hang = $params['keyWords'];
        $arrayKhachHang = $this->khachHang->searchKhachHang();

        $title            = 'Danh Sách Khách Hàng';
        $metaDescriptions = 'Danh sách toàn bộ khách hàng';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListKhachHang',[
            'arrayKhachHang'     => $arrayKhachHang,
            'title'              => $title,
            'metaDescriptions'   => $metaDescriptions,
            'metaKeywords'       => $metaKeywords,
            'urlCanonical'       => $urlCanonical,
        ]);
    }
}
