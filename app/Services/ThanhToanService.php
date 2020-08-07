<?php

namespace App\Services;

use App\Models\ThanhToan;
use Illuminate\Support\Facades\URL;

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

        $title            = 'Danh Sách Phương Thức Thanh Toán';
        $metaDescriptions = 'Danh sách toàn bộ phương thức thanh toán';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListThanhToan', [
            'arrayThanhToan'   => $arrayThanhToan,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function insertThanhToan()
    {
        $title            = 'Thêm Phương Thức Thanh Toán';
        $metaDescriptions = 'Thêm phương thức thanh toán';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('InsertThanhToan',[
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processInsertThanhToan($params)
    {
        $this->thanhToan->phuong_thuc_thanh_toan = $params['phuongThucThanhToan'];
        $this->thanhToan->insertThanhToan();

        return redirect()->route('listThanhToan')->with('success', 'Thêm phương thức thanh toán thành công');
    }

    public function updateThanhToan($id)
    {
        $this->thanhToan->ma_thanh_toan = $id;
        $thanhToan = $this->thanhToan->getOneThanhToan();

        $title            = 'Sửa Phương Thức Thanh Toán';
        $metaDescriptions = 'Sửa phương thức thanh toán ' . $thanhToan->phuong_thuc_thanh_toan;
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateThanhToan', [
            'thanhToan'        => $thanhToan,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processUpdateThanhToan($params, $id)
    {
        $this->thanhToan->ma_thanh_toan = $id;
        $this->thanhToan->phuong_thuc_thanh_toan = $params['phuongThucThanhToan'];
        $this->thanhToan->updateThanhToan();

        return redirect()->route('listThanhToan')->with('success', 'Sửa phương thức thanh toán thành công');
    }
}
