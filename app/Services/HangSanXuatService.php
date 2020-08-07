<?php

namespace App\Services;


use App\Models\HangSanXuat;
use Illuminate\Support\Facades\URL;

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

        $title            = 'Danh Sách Hãng Sản Xuất';
        $metaDescriptions = 'Danh sách toàn bộ hãng sản xuất';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListHangSanXuat', [
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function insertHangSanXuat()
    {
        $title            = 'Thêm Hãng Sản Xuất';
        $metaDescriptions = 'Thêm Hãng Sản Xuất';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('InsertHangSanXuat',[
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processInsertHangSanXuat($params)
    {
        $this->hangSanXuat->ten_hang_san_xuat = $params['tenHangSanXuat'];
        $this->hangSanXuat->insertHangSanXuat();

        return redirect()->route('listHangSanXuat')->with('success', 'Thêm hãng sản xuất thành công');
    }

    public function updateHangSanXuat($id)
    {
        $this->hangSanXuat = new HangSanXuat();
        $this->hangSanXuat->ma_hang_san_xuat = $id;
        $hangSanXuat = $this->hangSanXuat->getOneHangSanXuat();

        $title            = 'Sửa Hãng Sản Xuất';
        $metaDescriptions = 'Sửa hãng sản xuất ' . $hangSanXuat->ten_hang_san_xuat;
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateHangSanXuat', [
            'hangSanXuat'      => $hangSanXuat,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processUpdateHangSanXuat($params, $id)
    {
        $this->hangSanXuat->ma_hang_san_xuat = $id;
        $this->hangSanXuat->ten_hang_san_xuat = $params['tenHangSanXuat'];
        $this->hangSanXuat->updateHangSanXuat();

        return redirect()->route('listHangSanXuat')->with('success', 'Sửa hãng sản xuất thành công');
    }
}
