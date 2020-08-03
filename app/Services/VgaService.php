<?php

namespace App\Services;

use App\Models\Vga;
use Illuminate\Support\Facades\URL;

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

        $title            = 'Danh Sách VGA';
        $metaDescriptions = 'Danh sách toàn bộ VGA';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListVga', [
            'arrayVga'         => $arrayVga,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function insertVga()
    {
        $title            = 'Thêm VGA';
        $metaDescriptions = 'Thêm VGA';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('InsertVga',[
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
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

        $title            = 'Sửa VGA';
        $metaDescriptions = 'Sửa VGA ' . $vga->ten_vga;
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateVga', [
            'vga'              => $vga,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
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
