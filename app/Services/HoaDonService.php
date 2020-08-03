<?php

namespace App\Services;

use App\Models\HoaDon;
use App\Models\HoaDonChiTiet;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

Session::start();

class HoaDonService
{
    private $hoaDon;
    private $hoaDonChiTiet;

    public function __construct(HoaDon $hoaDon, HoaDonChiTiet $hoaDonChiTiet)
    {
        $this->hoaDon = $hoaDon;
        $this->hoaDonChiTiet = $hoaDonChiTiet;
    }

    public function listHoaDon()
    {
        $arrayHoaDon = $this->hoaDon->getAllHoaDon();

        $title            = 'Danh Sách Hóa Đơn';
        $metaDescriptions = 'Danh sách toàn bộ hóa đơn của khách hàng';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListHoaDon', [
            'arrayHoaDon'      => $arrayHoaDon,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processCheckOut($params)
    {
        $this->hoaDon->ma_khach_hang = Session::get('maKhachHang');
        $this->hoaDon->ma_thanh_toan = $params['maThanhToan'];
        $this->hoaDon->tong_tien     = Cart::subtotal();
        $this->hoaDon->tinh_trang    = 0;
        $this->hoaDon->created_at    = now();
        $hoaDonId = $this->hoaDon->insertHoaDonGetId();

        foreach (Cart::content() as $contentValue) {
            $this->hoaDonChiTiet->ma_hoa_don  = $hoaDonId;
            $this->hoaDonChiTiet->ma_san_pham = $contentValue->id;
            $this->hoaDonChiTiet->so_luong    = $contentValue->qty;
            $this->hoaDonChiTiet->gia         = $contentValue->price;
            $this->hoaDonChiTiet->insertHoaDonChiTiet();
        }
        Cart::destroy();
        return redirect()->route('viewGioHang');
    }

    public function listHoaDonChiTiet($id)
    {
        $this->hoaDonChiTiet->ma_hoa_don = $id;
        $arrayHoaDonChiTiet = $this->hoaDonChiTiet->getAllHoaDonChiTiet();

        $title            = 'Danh Sách Hóa Đơn Chi Tiết';
        $metaDescriptions = 'Danh sách hóa đơn chi tiết của khách hàng';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListHoaDonChiTiet', [
            'arrayHoaDonChiTiet' => $arrayHoaDonChiTiet,
            'title'              => $title,
            'metaDescriptions'   => $metaDescriptions,
            'metaKeywords'       => $metaKeywords,
            'urlCanonical'       => $urlCanonical,
        ]);
    }

    public function updateHoaDon($id)
    {
        $this->hoaDon->ma_hoa_don = $id;
        $hoaDon = $this->hoaDon->getOneHoaDon();

        $title            = 'Sửa Hóa Đơn';
        $metaDescriptions = 'Sửa hóa đơn ' . $hoaDon->ma_hoa_don;
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('updateHoaDon', [
            'hoaDon'           => $hoaDon,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processUpdateHoaDon($params, $id)
    {
        $this->hoaDon->ma_hoa_don = $id;
        $this->hoaDon->tinh_trang = $params['tinhTrang'];
        $this->hoaDon->updateHoaDon();

        return redirect()->route('listHoaDon');
    }
}
