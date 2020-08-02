<?php


namespace App\Services;


use App\Models\Ram;

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

        return view('ListRam', [
            'arrayRam' => $arrayRam,
        ]);
    }

    public function insertRam()
    {
        return view('InsertRam');
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

        return view('UpdateRam', [
            'ram' => $ram,
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
