<?php

namespace App\Http\Controllers;

use App\Services\GioHangService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Session::start();

class GioHangController extends Controller
{
    protected $gioHangService;

    public function __construct(GioHangService $gioHangService)
    {
        $this->gioHangService = $gioHangService;
    }

    public function viewGioHang()
    {
        return $this->gioHangService->viewGioHang();
    }

    public function processInsertSanPhamVaoGioHang(Request $request, $id)
    {
        return $this->gioHangService->processInsertSanPhamVaoGioHang($request->all(), $id);
    }

    public function updateQualtityCart(Request $request)
    {
        return $this->gioHangService->updateQualtityCart($request->all());
    }

    public function deleteSanPhamKhoiGioHang($rowId)
    {
        return $this->gioHangService->deleteSanPhamKhoiGioHang($rowId);
    }
}
