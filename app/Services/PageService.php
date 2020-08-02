<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\HangSanXuat;
use App\Models\HoaDon;
use App\Models\HoaDonChiTiet;
use App\Models\LoaiMay;
use App\Models\SanPham;
use App\Models\ThanhToan;
use Illuminate\Support\Facades\Session;

class PageService
{
    private $admin;
    private $hangSanXuat;
    private $hoaDon;
    private $hoaDonChiTiet;
    private $loaiMay;
    private $sanPham;
    private $thanhToan;

    public function __construct(Admin $admin, HangSanXuat $hangSanXuat, HoaDon $hoaDon, HoaDonChiTiet $hoaDonChiTiet, LoaiMay $loaiMay, SanPham $sanPham, ThanhToan $thanhToan)
    {
        $this->admin         = $admin;
        $this->hangSanXuat   = $hangSanXuat;
        $this->hoaDon        = $hoaDon;
        $this->hoaDonChiTiet = $hoaDonChiTiet;
        $this->loaiMay       = $loaiMay;
        $this->sanPham       = $sanPham;
        $this->thanhToan     = $thanhToan;
    }

    public function viewShop()
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $arraySanPham     = $this->sanPham->getAllSanPham();
        return view('Shop', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arraySanPham'     => $arraySanPham,
        ]);
    }

    public function viewSanPhamFromHangSanXuat($id)
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $this->sanPham->ma_hang_san_xuat = $id;
        $arraySanPham = $this->sanPham->getAllSanPhamFromHangSanXuat();

        return view('Shop', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arraySanPham'     => $arraySanPham,
        ]);
    }

    public function viewSanPhamFromLoaiMay($id)
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $this->sanPham->ma_loai_may = $id;
        $arraySanPham = $this->sanPham->getAllSanPhamFromLoaiMay();

        return view('Shop', [
            'arrayAdmin' => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay' => $arrayLoaiMay,
            'arraySanPham' => $arraySanPham,
        ]);
    }

    public function home()
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();
        return view('Home', [
            'arrayAdmin' => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay' => $arrayLoaiMay,
        ]);
    }

    public function viewChiTietSanPham($id)
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $this->sanPham->ma_san_pham = $id;
        $sanPham = $this->sanPham->getOneSanPham();
        return view('ViewChiTietSanPham', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'sanPham'          => $sanPham,
        ]);
    }

    public function checkOut()
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $arrayPhuongThucThanhToan = $this->thanhToan->getAllThanhToan();
        return view('CheckOut', [
            'arrayAdmin'               => $arrayAdmin,
            'arrayHangSanXuat'         => $arrayHangSanXuat,
            'arrayLoaiMay'             => $arrayLoaiMay,
            'arrayPhuongThucThanhToan' => $arrayPhuongThucThanhToan,
        ]);
    }

    public function searchSanPham($params)
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $this->sanPham->ten_san_pham = $params['keyWord'];
        $arraySanPham = $this->sanPham->searchSanPham();

        return view('Shop', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arraySanPham'     => $arraySanPham,
        ]);
    }

    public function historyHoaDon()
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $sessionKhachHang = Session::get('maKhachHang');

        $this->hoaDon->ma_khach_hang = $sessionKhachHang;
        $arrayHoaDon = $this->hoaDon->getAllHoaDonForOneKhachHang();

        return view('LichSuDatHang', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arrayHoaDon'      => $arrayHoaDon,
        ]);
    }

    public function historyHoaDonChiTiet($id)
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $this->hoaDonChiTiet->ma_hoa_don = $id;
        $arrayHoaDonChiTiet = $this->hoaDonChiTiet->getAllHoaDonChiTiet();

        return view('LichSuDatHangChiTiet', [
            'arrayAdmin'         => $arrayAdmin,
            'arrayHangSanXuat'   => $arrayHangSanXuat,
            'arrayLoaiMay'       => $arrayLoaiMay,
            'arrayHoaDonChiTiet' => $arrayHoaDonChiTiet,
        ]);
    }
}
