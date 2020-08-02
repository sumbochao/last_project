<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\HangSanXuat;
use App\Models\LoaiMay;
use App\Models\SanPham;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

Session::start();

class GioHangService
{
    private $admin;
    private $sanPham;
    private $hangSanXuat;
    private $loaiMay;

    public function __construct(Admin $admin, SanPham $sanPham, HangSanXuat $hangSanXuat, LoaiMay $loaiMay)
    {
        $this->admin       = $admin;
        $this->sanPham     = $sanPham;
        $this->hangSanXuat = $hangSanXuat;
        $this->loaiMay     = $loaiMay;
    }

    public function viewGioHang()
    {
        $arrayAdmin       = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $arraySanPham     = $this->sanPham->getAllSanPham();

        $title            = 'Giỏ Hàng';
        $metaDescriptions = 'Giỏ Hàng Của Bạn';
        $metaKeywords     = 'Máy tính Hà nội, DCComputer, Siêu thị Laptop, Workstations';
        $urlCanonical     = URL::current();

        return view('ViewGioHang', [
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

    public function processInsertSanPhamVaoGioHang($params, $id)
    {
        $maSanPham = $this->sanPham->ma_san_pham = $id;
        $soLuong = $this->sanPham->soLuong = $params['soLuong'];
        $sanPham = $this->sanPham->getOneSanPham();

        $data['id']               = $maSanPham;
        $data['qty']              = $soLuong;
        $data['name']             = $sanPham->ten_san_pham;
        $data['price']            = $sanPham->gia;
        $data['weight']           = $sanPham->gia;
        $data['options']['image'] = $sanPham->anh_san_pham;
        Cart::add($data);

        return redirect()->route('viewGioHang');
    }

    public function updateQualtityCart($params)
    {
        $rowId = $params['rowId'];
        $soLuong = $params['soLuong'];
        Cart::update($rowId, $soLuong);

        return redirect()->route('viewGioHang');
    }

    public function deleteSanPhamKhoiGioHang($rowId)
    {
        Cart::remove($rowId);

        return redirect()->route('viewGioHang');
    }
}
