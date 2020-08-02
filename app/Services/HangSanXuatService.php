<?php

namespace App\Services;


use App\Models\HangSanXuat;

class HangSanXuatService
{
    private $hangSanXuat;

    public function __construct(HangSanXuat $hangSanXuat)
    {
        $this->hangSanXuat = $hangSanXuat;
    }

    public function listHangSanXuat()
    {
        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        return view('ListHangSanXuat', [
            'arrayHangSanXuat' => $arrayHangSanXuat,
        ]);
    }

    public function insertHangSanXuat()
    {
        return view('InsertHangSanXuat');
    }

    public function processInsertHangSanXuat($params)
    {
        $this->hangSanXuat->ten_hang_san_xuat = $params['tenHangSanXuat'];
        $this->hangSanXuat->insertHangSanXuat();

        return redirect()->route('listHangSanXuat');
    }

    public function updateHangSanXuat($id)
    {
        $this->hangSanXuat = new HangSanXuat();
        $this->hangSanXuat->ma_hang_san_xuat = $id;
        $hangSanXuat = $this->hangSanXuat->getOneHangSanXuat();

        return view('UpdateHangSanXuat', [
            'hangSanXuat' => $hangSanXuat,
        ]);
    }

    public function processUpdateHangSanXuat($params, $id)
    {
        $this->hangSanXuat->ma_hang_san_xuat = $id;
        $this->hangSanXuat->ten_hang_san_xuat = $params['tenHangSanXuat'];
        $this->hangSanXuat->updateHangSanXuat();

        return redirect()->route('listHangSanXuat');
    }
}
