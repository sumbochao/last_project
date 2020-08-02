<?php

namespace App\Http\Controllers;

use App\Services\SanPhamService;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    protected $sanPhamService;

    public function __construct(SanPhamService $sanPhamService)
    {
        $this->sanPhamService = $sanPhamService;
    }

    public function listSanPham()
    {
        return $this->sanPhamService->listSanPham();
    }

    public function insertSanPham()
    {
        return $this->sanPhamService->insertSanPham();
    }

    public function processInsertSanPham(Request $request)
    {
        return $this->sanPhamService->processInsertSanPham($request->all());
    }

    public function updateSanPham($id)
    {
        return $this->sanPhamService->updateSanPham($id);
    }

    public function processUpdateSanPham(Request $request, $id)
    {
        return $this->sanPhamService->processUpdateSanPham($request->all(), $id);
    }

    public function deleteSanPham($id)
    {
        return $this->sanPhamService->deleteSanPham($id);
    }
}
