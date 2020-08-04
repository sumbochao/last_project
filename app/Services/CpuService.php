<?php


namespace App\Services;


use App\Models\Cpu;
use Illuminate\Support\Facades\URL;

class CpuService
{
    private $cpu;

    public function __construct(Cpu $cpu)
    {
        $this->cpu = $cpu;
    }

    public function listCpu()
    {
        $arrayCpu = $this->cpu->getAllCpu();

        $title            = 'Danh Sách Cpu';
        $metaDescriptions = 'Danh sách toàn bộ cpu';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListCpu', [
            'arrayCpu'         => $arrayCpu,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function insertCpu()
    {
        $title            = 'Thêm Cpu';
        $metaDescriptions = 'Thêm Cpu';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('InsertCpu', [
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processInsertCpu($params)
    {
        $this->cpu->ten_cpu      = $params['tenCpu'];
        $this->cpu->tan_so_cpu   = $params['tanSoCpu'] ?? null;
        $this->cpu->bo_nho_cache = $params['boNhoCache'] ?? null;
        $this->cpu->dong_cpu     = $params['dongCpu'] ?? null;
        $this->cpu->insertCpu();

        return redirect()->route('listCpu');
    }

    public function updateCpu($id)
    {
        $this->cpu->ma_cpu = $id;
        $cpu = $this->cpu->getOneCpu();

        $title            = 'Sửa Cpu';
        $metaDescriptions = 'Sửa Cpu ' . $cpu->ten_cpu;
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateCpu', [
            'cpu'              => $cpu,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processUpdateCpu($params, $id)
    {
        $this->cpu->ma_cpu       = $id;
        $this->cpu->ten_cpu      = $params['tenCpu'];
        $this->cpu->tan_so_cpu   = $params['tanSoCpu'] ?? null;
        $this->cpu->bo_nho_cache = $params['boNhoCache'] ?? null;
        $this->cpu->dong_cpu     = $params['dongCpu'] ?? null;
        $this->cpu->updateCpu();

        return redirect()->route('listCpu');
    }
}
