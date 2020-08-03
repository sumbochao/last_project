<?php

namespace App\Services;

use App\Models\OCung;
use Illuminate\Support\Facades\URL;

class OCungService
{
    private $oCung;

    public function __construct(OCung $oCung)
    {
        $this->oCung = $oCung;
    }

    public function listOCung()
    {
        $arrayOCung = $this->oCung->getAllOCung();

        $title            = 'Danh Sách Ổ Cứng';
        $metaDescriptions = 'Danh sách toàn bộ ổ cứng';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListOCung', [
            'arrayOCung'       => $arrayOCung,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function insertOCung()
    {
        $title            = 'Thêm Ổ Cứng';
        $metaDescriptions = 'Thêm Ổ Cứng';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('InsertOCung',[
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processInsertOCung($params)
    {
        $this->oCung->loai_o_cung = $params['loaiOCung'];
        $this->oCung->dung_luong_o_cung = $params['dungLuongOCung'];
        $this->oCung->insertOCung();

        return redirect()->route('listOCung');
    }

    public function updateOCung($id)
    {
        $this->oCung->ma_o_cung = $id;
        $oCung = $this->oCung->getOneOCung();

        $title            = 'Sửa Ổ Cứng ';
        $metaDescriptions = 'Sửa Ổ Cứng';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateOCung', [
            'oCung'            => $oCung,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processUpdateOCung($params, $id)
    {
        $this->oCung->ma_o_cung = $id;
        $this->oCung->loai_o_cung = $params['loaiOCung'];
        $this->oCung->dung_luong_o_cung = $params['dungLuongOCung'];
        $this->oCung->updateOCung();

        return redirect()->route('listOCung');
    }
}
