<?php


namespace App\Services;


use App\Models\Cpu;

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

        return view('ListCpu', [
            'arrayCpu' => $arrayCpu,
        ]);
    }

    public function insertCpu()
    {
        return view('InsertCpu');
    }

    public function processInsertCpu($params)
    {
        $this->cpu->ten_cpu      = $params['tenCpu'];
        $this->cpu->tan_so_cpu   = $params['tanSoCpu'];
        $this->cpu->bo_nho_cache = $params['boNhoCache'];
        $this->cpu->dong_cpu     = $params['dongCpu'];
        $this->cpu->insertCpu();

        return redirect()->route('listCpu');
    }

    public function updateCpu($id)
    {
        $this->cpu->ma_cpu = $id;
        $cpu = $this->cpu->getOneCpu();

        return view('UpdateCpu', [
            'cpu' => $cpu,
        ]);
    }

    public function processUpdateCpu($params, $id)
    {
        $this->cpu->ma_cpu       = $id;
        $this->cpu->ten_cpu      = $params['tenCpu'];
        $this->cpu->tan_so_cpu   = $params['tanSoCpu'];
        $this->cpu->bo_nho_cache = $params['boNhoCache'];
        $this->cpu->dong_cpu     = $params['dongCpu'];
        $this->cpu->updateCpu();

        return redirect()->route('listCpu');
    }
}
