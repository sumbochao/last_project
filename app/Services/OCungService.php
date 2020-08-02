<?php

namespace App\Services;

use App\Models\OCung;

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

        return view('ListOCung', [
            'arrayOCung' => $arrayOCung,
        ]);
    }

    public function insertOCung()
    {
        return view('InsertOCung');
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

        return view('UpdateOCung', [
            'oCung' => $oCung,
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
