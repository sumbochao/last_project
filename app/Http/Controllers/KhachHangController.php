<?php

namespace App\Http\Controllers;

use App\Services\KhachHangService;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    protected $khachHangService;

    public function __construct(KhachHangService $khachHangService)
    {
        $this->khachHangService = $khachHangService;
    }

    public function listKhachHang()
    {
        return $this->khachHangService->listKhachHang();
    }

    public function processInsertKhachHang(Request $request)
    {
        return $this->khachHangService->processInsertKhachHang($request->all());
    }

    public function updateKhachHang($id)
    {
        return $this->khachHangService->updateKhachHang($id);
    }

    public function processUpdateKhachHang(Request $request, $id)
    {
        return $this->khachHangService->processUpdateKhachHang($request->all(), $id);
    }

    public function deleteKhachHang($id)
    {
        return $this->khachHangService->deleteKhachHang($id);
    }
}
