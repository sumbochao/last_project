<?php

namespace App\Http\Controllers;

use App\Services\ThanhToanService;
use Illuminate\Http\Request;

class ThanhToanController extends Controller
{
    protected $thanhToanService;

    public function __construct(ThanhToanService $thanhToanService)
    {
        $this->thanhToanService = $thanhToanService;
    }

    public function listThanhToan()
    {
        return $this->thanhToanService->listThanhToan();
    }

    public function insertThanhToan()
    {
        return $this->thanhToanService->insertThanhToan();
    }

    public function processInsertThanhToan(Request $request)
    {
        return $this->thanhToanService->processInsertThanhToan($request->all());
    }

    public function updateThanhToan($id)
    {
        return $this->thanhToanService->updateThanhToan($id);
    }

    public function processUpdateThanhToan(Request $request, $id)
    {
        return $this->thanhToanService->processUpdateThanhToan($request->all(), $id);
    }

    public function deleteThanhToan($id)
    {
        return $this->thanhToanService->deleteThanhToan($id);
    }
}
