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
use Illuminate\Support\Facades\URL;

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

        $title            = 'Toàn Bộ Sản Phẩm';
        $metaDescriptions = 'Danh sách toàn bộ sản phẩm';
        $metaKeywords     = 'Máy tính Hà nội, DCComputer, Siêu thị Laptop, Workstations';
        $urlCanonical     = URL::current();

        return view('Shop', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arraySanPham'     => $arraySanPham,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function viewSanPhamFromHangSanXuat($id)
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $this->sanPham->ma_hang_san_xuat = $id;
        $arraySanPham = $this->sanPham->getAllSanPhamFromHangSanXuat();

        $title            = 'Sản Phẩm Theo Hãng Sản Xuất';
        $metaDescriptions = 'Danh sách toàn bộ sản phẩm theo từng hãng sản xuất như Dell, MSI, Asus,...';
        $metaKeywords     = 'Máy tính Hà nội, DCComputer, Siêu thị Laptop, Workstations';
        $urlCanonical     = URL::current();

        return view('Shop', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arraySanPham'     => $arraySanPham,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function viewSanPhamFromLoaiMay($id)
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $this->sanPham->ma_loai_may = $id;
        $arraySanPham = $this->sanPham->getAllSanPhamFromLoaiMay();

        $title            = 'Sản Phẩm Theo Loại Máy';
        $metaDescriptions = 'Danh sách toàn bộ sản phẩm theo loại máy';
        $metaKeywords     = 'Máy tính Hà nội, DCComputer, Siêu thị Laptop, Workstations';
        $urlCanonical     = URL::current();

        return view('Shop', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arraySanPham'     => $arraySanPham,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function home()
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $arraySanPham     = $this->sanPham->getAllSanPham();

        $title            = 'Đạt Cường Computer';
        $metaDescriptions = 'Công ty Cổ Phần Máy Tính Hà Nội - Siêu thị Laptop';
        $metaKeywords     = 'Máy tính Hà nội, DCComputer, Siêu thị Laptop, Workstations';
        $urlCanonical     = URL::current();

        return view('Home', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arraySanPham'     => $arraySanPham,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function viewChiTietSanPham($id)
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $this->sanPham->ma_san_pham = $id;
        $sanPham = $this->sanPham->getOneSanPham();

        $title            = $sanPham->ten_san_pham;
        $metaDescriptions = $sanPham->mo_ta;
        $metaKeywords     = 'Máy tính Hà nội, DCComputer, Siêu thị Laptop, Workstations';
        $urlCanonical     = URL::current();

        return view('ViewChiTietSanPham', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'sanPham'          => $sanPham,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function checkOut()
    {
        $arrayAdmin               = $this->admin->getAllAdmin();

        $arrayHangSanXuat         = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay             = $this->loaiMay->getAllLoaiMay();

        $arrayPhuongThucThanhToan = $this->thanhToan->getAllThanhToan();

        $title            = 'Thanh Toán Sản Phẩm';
        $metaDescriptions = 'Khách hàng thanh toán sản phẩm theo giỏ hàng';
        $metaKeywords     = 'Máy tính Hà nội, DCComputer, Siêu thị Laptop, Workstations';
        $urlCanonical     = URL::current();

        return view('CheckOut', [
            'arrayAdmin'               => $arrayAdmin,
            'arrayHangSanXuat'         => $arrayHangSanXuat,
            'arrayLoaiMay'             => $arrayLoaiMay,
            'arrayPhuongThucThanhToan' => $arrayPhuongThucThanhToan,
            'title'                    => $title,
            'metaDescriptions'         => $metaDescriptions,
            'metaKeywords'             => $metaKeywords,
            'urlCanonical'             => $urlCanonical,
        ]);
    }

    public function searchSanPham($params)
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $this->sanPham->ten_san_pham = $params['keyWord'];
        $arraySanPham = $this->sanPham->searchSanPham();

        $title            = 'Danh Sách ' . $params['keyWord'] . ' | ' . 'Từ Khóa ' . $params['keyWord'];
        $metaDescriptions = 'Danh sách kết quả thỏa mãn ' . $params['keyWord'];
        $metaKeywords     = $params['keyWord'];
        $urlCanonical     = URL::current();

        return view('Shop', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arraySanPham'     => $arraySanPham,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
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

        $title            = 'Lịch Sử Đặt Hàng';
        $metaDescriptions = 'Lịch sử đặt hàng của ' . Session::get('hoTenKhachHang');
        $metaKeywords     = 'Máy tính Hà nội, DCComputer, Siêu thị Laptop, Workstations';
        $urlCanonical     = URL::current();

        return view('LichSuDatHang', [
            'arrayAdmin'       => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arrayHoaDon'      => $arrayHoaDon,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function historyHoaDonChiTiet($id)
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $this->hoaDonChiTiet->ma_hoa_don = $id;
        $arrayHoaDonChiTiet = $this->hoaDonChiTiet->getAllHoaDonChiTiet();

        $title            = 'Lịch Sử Đặt Hàng Chi Tiết';
        $metaDescriptions = 'Lịch sử đặt hàng chi tiết của ' . Session::get('hoTenKhachHang');
        $metaKeywords     = 'Máy tính Hà nội, DCComputer, Siêu thị Laptop, Workstations';
        $urlCanonical     = URL::current();

        return view('LichSuDatHangChiTiet', [
            'arrayAdmin'         => $arrayAdmin,
            'arrayHangSanXuat'   => $arrayHangSanXuat,
            'arrayLoaiMay'       => $arrayLoaiMay,
            'arrayHoaDonChiTiet' => $arrayHoaDonChiTiet,
            'title'              => $title,
            'metaDescriptions'   => $metaDescriptions,
            'metaKeywords'       => $metaKeywords,
            'urlCanonical'       => $urlCanonical,
        ]);
    }
}
