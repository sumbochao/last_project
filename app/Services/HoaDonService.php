<?php

namespace App\Services;

use App\Models\HoaDon;
use App\Models\HoaDonChiTiet;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

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

        return view('ListHoaDon', [
            'arrayHoaDon' => $arrayHoaDon,
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
        return view('ListHoaDonChiTiet', [
            'arrayHoaDonChiTiet' => $arrayHoaDonChiTiet,
        ]);
    }

    public function updateHoaDon($id)
    {
        $this->hoaDon->ma_hoa_don = $id;
        $hoaDon = $this->hoaDon->getOneHoaDon();

        return view('updateHoaDon', [
            'hoaDon' => $hoaDon,
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
