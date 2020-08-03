<?php


namespace App\Services;


use App\Models\Ram;
use Illuminate\Support\Facades\URL;

class RamService
{
    private $ram;

    public function __construct(Ram $ram)
    {
        $this->ram = $ram;
    }

    public function listRam()
    {
        $arrayRam = $this->ram->getAllRam();

        $title            = 'Danh Sách RAM';
        $metaDescriptions = 'Danh sách toàn bộ RAM';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListRam', [
            'arrayRam'         => $arrayRam,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function insertRam()
    {
        $title            = 'Thêm RAM';
        $metaDescriptions = 'Thêm RAM';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('InsertRam',[
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processInsertRam($params)
    {
        $this->ram->loai_ram       = $params['loaiRam'];
        $this->ram->dung_luong_ram = $params['dungLuongRam'];
        $this->ram->tan_so_ram     = $params['tanSoRam'];
        $this->ram->insertRam();

        return redirect()->route('listRam');
    }

    public function updateRam($id)
    {
        $this->ram->ma_ram = $id;
        $ram = $this->ram->getOneRam();

        $title            = 'Sửa RAM';
        $metaDescriptions = 'Sửa RAM';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateRam', [
            'ram'              => $ram,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processUpdateRam($params, $id)
    {
        $this->ram->ma_ram         = $id;
        $this->ram->loai_ram       = $params['loaiRam'];
        $this->ram->dung_luong_ram = $params['dungLuongRam'];
        $this->ram->tan_so_ram     = $params['tanSoRam'];
        $this->ram->updateRam();

        return redirect()->route('listRam');
    }
}
