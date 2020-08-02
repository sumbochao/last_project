<?php

namespace App\Http\Controllers;

use App\Services\LoaiMayService;
use Illuminate\Http\Request;

class LoaiMayController extends Controller
{
    protected $loaiMayService;

    public function __construct(LoaiMayService $loaiMayService)
    {
        $this->loaiMayService = $loaiMayService;
    }

    public function listLoaiMay()
    {
        return $this->loaiMayService->listLoaiMay();
    }

    public function insertLoaiMay()
    {
        return $this->loaiMayService->insertLoaiMay();
    }

    public function processInsertLoaiMay(Request $request)
    {
        return $this->loaiMayService->processInsertLoaiMay($request->all());
    }

    public function updateLoaiMay($id)
    {
        return $this->loaiMayService->updateLoaiMay($id);
    }

    public function processUpdateLoaiMay(Request $request, $id)
    {
        return $this->loaiMayService->processUpdateLoaiMay($request->all(), $id);
    }
}
