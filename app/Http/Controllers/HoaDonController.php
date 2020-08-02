<?php

namespace App\Http\Controllers;

use App\Services\HoaDonService;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    protected $hoaDonService;

    public function __construct(HoaDonService $hoaDonService)
    {
        $this->hoaDonService = $hoaDonService;
    }

    public function listHoaDon()
    {
        return $this->hoaDonService->listHoaDon();
    }

    public function listHoaDonChiTiet($id)
    {
        return $this->hoaDonService->listHoaDonChiTiet($id);
    }

    public function processCheckOut(Request $request)
    {
        return $this->hoaDonService->processCheckOut($request->all());
    }

    public function updateHoaDon($id)
    {
        return $this->hoaDonService->updateHoaDon($id);
    }

    public function processUpdateHoaDon(Request $request, $id)
    {
        return $this->hoaDonService->processUpdateHoaDon($request->all(), $id);
    }
}
