<?php

namespace App\Services;

use App\Models\ThanhToan;

class ThanhToanService
{
    private $thanhToan;

    public function __construct(ThanhToan $thanhToan)
    {
        $this->thanhToan = $thanhToan;
    }

    public function listThanhToan()
    {
        $arrayThanhToan = $this->thanhToan->getAllThanhToan();

        return view('ListThanhToan', [
            'arrayThanhToan' => $arrayThanhToan,
        ]);
    }

    public function insertThanhToan()
    {
        return view('InsertThanhToan');
    }

    public function processInsertThanhToan($params)
    {
        $this->thanhToan->phuong_thuc_thanh_toan = $params['phuongThucThanhToan'];
        $this->thanhToan->insertThanhToan();

        return redirect()->route('listThanhToan');
    }

    public function updateThanhToan($id)
    {
        $this->thanhToan->ma_thanh_toan = $id;
        $thanhToan = $this->thanhToan->getOneThanhToan();

        return view('UpdateThanhToan', [
            'thanhToan' => $thanhToan,
        ]);
    }

    public function processUpdateThanhToan($params, $id)
    {
        $this->thanhToan->ma_thanh_toan = $id;
        $this->thanhToan->phuong_thuc_thanh_toan = $params['phuongThucThanhToan'];
        $this->thanhToan->updateThanhToan();

        return redirect()->route('listThanhToan');
    }

    public function deleteThanhToan($id)
    {
        $this->thanhToan->ma_thanh_toan = $id;
        $this->thanhToan->deleteThanhToan();

        return redirect()->route('listThanhToan');
    }
}
