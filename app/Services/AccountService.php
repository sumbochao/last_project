<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\HangSanXuat;
use App\Models\KhachHang;
use App\Models\LoaiMay;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AccountService
{
    private $admin;
    private $khachHang;
    private $hangSanXuat;
    private $loaiMay;

    public function __construct(Admin $admin, KhachHang $khachHang, HangSanXuat $hangSanXuat, LoaiMay $loaiMay)
    {
        $this->admin = $admin;
        $this->khachHang = $khachHang;
        $this->hangSanXuat = $hangSanXuat;
        $this->loaiMay = $loaiMay;
    }

    public function adminSignIn()
    {
        $title            = 'Admin Đăng Nhập';
        $metaDescriptions = 'Admin đăng nhập tài khoản của mình để vào trang quản lý';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('AdminSignIn',[
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processAdminSignIn($params)
    {
        $this->admin->tai_khoan = $params['taiKhoan'];
        $this->admin->mat_khau = $params['matKhau'];
        $getAdmin = $this->admin->getOneAdminSignIn();
        if (count($getAdmin) == 1) {
            if (Hash::check($this->admin->mat_khau, $getAdmin[0]->mat_khau)) {
                Session::put('maAdmin', $getAdmin[0]->ma_admin);
                Session::put('hoTenAdmin', $getAdmin[0]->ho_ten_admin);
                Session::put('anhAdmin', $getAdmin[0]->anh_admin);
                Session::put('capDo', $getAdmin[0]->cap_do);
                return redirect()->route('welcomeAdmin');
            }
        }
        return redirect()->route('adminSignIn')->with('error', 'Đăng nhập thất bại, vui lòng đăng nhập tài khoản của admin');
    }

    public function welcomeAdmin()
    {
        $title            = 'Chào Admin ' . Session::get('hoTenAdmin');
        $metaDescriptions = 'Trang gửi lời chào đến admin đăng nhập';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('WelcomeAdmin',[
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function adminSignOut()
    {
        /*Session::forget('ma_admin');*/

        Session::flush();

        return redirect()->route('adminSignIn')->with('success', 'Đăng xuất thành công');
    }

    public function khachHangSignInOrSignUp()
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $title            = 'Khách Hàng Đăng Nhập Và Đăng Ký';
        $metaDescriptions = 'Khách Hàng Đăng Nhập Và Đăng Ký';
        $metaKeywords     = 'Máy tính Hà nội, DCComputer, Siêu thị Laptop, Workstations';
        $urlCanonical     = URL::current();

        return view('KhachHangSignInOrSignUp', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processKhachHangSignIn($params)
    {
        $this->khachHang->tai_khoan = $params['taiKhoan'];
        $this->khachHang->mat_khau = $params['matKhau'];
        $getKhachHang = $this->khachHang->getOneKhachHangSignIn();
        if (count($getKhachHang) == 1) {
            if (Hash::check($this->khachHang->mat_khau, $getKhachHang[0]->mat_khau)) {
                Session::put('maKhachHang', $getKhachHang[0]->ma_khach_hang);
                Session::put('hoTenKhachHang', $getKhachHang[0]->ho_ten_khach_hang);
                Session::put('email', $getKhachHang[0]->email);
                Session::put('sdt', $getKhachHang[0]->sdt);
                Session::put('diaChi', $getKhachHang[0]->dia_chi);
                Session::put('anhKhachHang', $getKhachHang[0]->anh_khach_hang);

                return redirect()->route('home');
            }
        }
        return redirect()->route('khachHangSignInOrSignUp')->with('error', 'Đăng nhập thất bại, vui lòng đăng nhập đúng tài khoản của bạn');

    }

    public function khachHangSignOut()
    {
        Session::flush();

        return redirect()->route('khachHangSignInOrSignUp')->with('success', 'Đăng xuất thành công');
    }
}
