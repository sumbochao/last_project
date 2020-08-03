<?php


namespace App\Services;


use App\Models\ManHinh;
use Illuminate\Support\Facades\URL;

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

        $title            = 'Danh Sách Màn Hình';
        $metaDescriptions = 'Danh sách toàn bộ màn hình';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListManHinh', [
            'arrayManHinh'     => $arrayManHinh,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function insertManHinh()
    {
        $title            = 'Thêm Màn Hình';
        $metaDescriptions = 'Thêm màn hình';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('InsertManHinh', [
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
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

        $title            = 'Sửa Màn Hình';
        $metaDescriptions = 'Sửa màn hình';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateManHinh', [
                'manHinh'          => $manHinh,
                'title'            => $title,
                'metaDescriptions' => $metaDescriptions,
                'metaKeywords'     => $metaKeywords,
                'urlCanonical'     => $urlCanonical,
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
