<?php

namespace App\Services;

use App\Models\Vga;

class VgaService
{
    private $vga;

    public function __construct(Vga $vga)
    {
        $this->vga = $vga;
    }

    public function listVga()
    {
        $arrayVga = $this->vga->getAllVga();

        return view('ListVga', [
            'arrayVga' => $arrayVga,
        ]);
    }

    public function insertVga()
    {
        return view('InsertVga');
    }

    public function processInsertVga($params)
    {
        $this->vga->loai_vga = $params['loaiVga'];
        $this->vga->ten_vga = $params['tenVga'];
        $this->vga->dung_luong_vga = $params['dungLuongVga'];
        $this->vga->insertVga();

        return redirect()->route('listVga');
    }

    public function updateVga($id)
    {
        $this->vga->ma_vga = $id;
        $vga = $this->vga->getOneVga();

        return view('UpdateVga', [
            'vga' => $vga,
        ]);
    }

    public function processUpdateVga($params, $id)
    {
        $this->vga->ma_vga         = $id;
        $this->vga->loai_vga       = $params['loaiVga'];
        $this->vga->ten_vga        = $params['tenVga'];
        $this->vga->dung_luong_vga = $params['dungLuongVga'];
        $this->vga->updateVga();

        return redirect()->route('listVga');
    }
}
