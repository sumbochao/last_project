<?php

namespace App\Services;

use App\Models\LoaiMay;
use Illuminate\Support\Facades\URL;

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

        $title            = 'Danh Sách Loại Máy';
        $metaDescriptions = 'Danh sách toàn bộ loại máy';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListLoaiMay', [
            'arrayLoaiMay'       => $arrayLoaiMay,
            'title'              => $title,
            'metaDescriptions'   => $metaDescriptions,
            'metaKeywords'       => $metaKeywords,
            'urlCanonical'       => $urlCanonical,
        ]);
    }

    public function insertLoaiMay()
    {
        $title            = 'Thêm Loại Máy';
        $metaDescriptions = 'Thêm loại máy';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('InsertLoaiMay',[
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
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

        $title            = 'Sửa Loại Máy';
        $metaDescriptions = 'Sửa loại máy ' . $loaiMay->ten_loai_may;
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateLoaiMay', [
            'loaiMay'            => $loaiMay,
            'title'              => $title,
            'metaDescriptions'   => $metaDescriptions,
            'metaKeywords'       => $metaKeywords,
            'urlCanonical'       => $urlCanonical,
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
