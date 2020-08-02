<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\HangSanXuat;
use App\Models\LoaiMay;
use App\Models\SanPham;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

Session::start();

class GioHangService
{
    private $admin;
    private $sanPham;
    private $hangSanXuat;
    private $loaiMay;

    public function __construct(Admin $admin, SanPham $sanPham, HangSanXuat $hangSanXuat, LoaiMay $loaiMay)
    {
        $this->admin = $admin;
        $this->sanPham = $sanPham;
        $this->hangSanXuat = $hangSanXuat;
        $this->loaiMay = $loaiMay;
    }

    public function viewGioHang()
    {
        $arrayAdmin = $this->admin->getAllAdmin();

        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay = $this->loaiMay->getAllLoaiMay();

        $arraySanPham = $this->sanPham->getAllSanPham();

        return view('ViewGioHang', [
            'arrayAdmin' => $arrayAdmin,
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay' => $arrayLoaiMay,
            'arraySanPham' => $arraySanPham,
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
