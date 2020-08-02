<?php


namespace App\Services;


use App\Models\ManHinh;

class ManHinhService
{
    private $manHinh;

    public function __construct(ManHinh $manHinh)
    {
        $this->manHinh = $manHinh;
    }

    public function listManHinh()
    {
        $arrayManHinh = $this->manHinh->getAllManHinh();

        return view('ListManHinh', [
            'arrayManHinh' => $arrayManHinh,
        ]);
    }

    public function insertManHinh()
    {
        return view('InsertManHinh');
    }

    public function processInsertManHinh($params)
    {
        $this->manHinh->kich_co         = $params['kichCo'];
        $this->manHinh->do_phan_giai    = $params['doPhanGiai'];
        $this->manHinh->tan_so_man_hinh = $params['tanSoManHinh'];
        $this->manHinh->tam_nen         = $params['tamNen'];
        $this->manHinh->insertManHinh();

        return redirect()->route('listManHinh');
    }

    public function updateManHinh($id)
    {
        $this->manHinh->ma_man_hinh = $id;
        $manHinh = $this->manHinh->getOneManHinh();

        return view('UpdateManHinh', [
                'manHinh' => $manHinh,
            ]
        );
    }

    public function processUpdateManHinh($params, $id)
    {
        $this->manHinh->ma_man_hinh     = $id;
        $this->manHinh->kich_co         = $params['kichCo'];
        $this->manHinh->do_phan_giai    = $params['doPhanGiai'];
        $this->manHinh->tan_so_man_hinh = $params['tanSoManHinh'];
        $this->manHinh->tam_nen         = $params['tamNen'];
        $this->manHinh->updateManHinh();

        return redirect()->route('listManHinh');
    }
}
