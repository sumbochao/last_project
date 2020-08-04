<?php

namespace App\Http\Controllers;

use App\Services\HangSanXuatService;
use Illuminate\Http\Request;

class HangSanXuatController extends Controller
{
    protected $hangSanXuatService;

    public function __construct(HangSanXuatService $hangSanXuatService)
    {
        $this->hangSanXuatService = $hangSanXuatService;
    }

    public function listHangSanXuat()
    {
        return $this->hangSanXuatService->listHangSanXuat();
    }

    public function insertHangSanXuat()
    {
        return $this->hangSanXuatService->insertHangSanXuat();
    }

    public function processInsertHangSanXuat(Request $request)
    {
        return $this->hangSanXuatService->processInsertHangSanXuat($request->all());
    }

    public function updateHangSanXuat($id)
    {
        return $this->hangSanXuatService->updateHangSanXuat($id);
    }

    public function processUpdateHangSanXuat(Request $request, $id)
    {
        return $this->hangSanXuatService->processUpdateHangSanXuat($request->all(), $id);
    }
}
