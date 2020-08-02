<?php

namespace App\Services;

use App\Models\LoaiMay;

class LoaiMayService
{
    private $loaiMay;

    public function __construct(LoaiMay $loaiMay)
    {
        $this->loaiMay = $loaiMay;
    }

    public function listLoaiMay()
    {
        $arrayLoaiMay = $this->loaiMay->getAllLoaiMay();

        return view('ListLoaiMay', [
            'arrayLoaiMay' => $arrayLoaiMay,
        ]);
    }

    public function insertLoaiMay()
    {
        return view('InsertLoaiMay');
    }

    public function processInsertLoaiMay($params)
    {
        $this->loaiMay->ten_loai_may = $params['tenLoaiMay'];
        $this->loaiMay->insertLoaiMay();

        return redirect()->route('listLoaiMay');
    }

    public function updateLoaiMay($id)
    {
        $this->loaiMay->ma_loai_may = $id;
        $loaiMay = $this->loaiMay->getOneLoaiMay();

        return view('UpdateLoaiMay', [
            'loaiMay' => $loaiMay,
        ]);
    }

    public function processUpdateLoaiMay($params, $id)
    {
        $this->loaiMay->ma_loai_may = $id;
        $this->loaiMay->ten_loai_may = $params['tenLoaiMay'];
        $this->loaiMay->updateLoaiMay();

        return redirect()->route('listLoaiMay');
    }
}
