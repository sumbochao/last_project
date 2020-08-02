<?php

namespace App\Http\Controllers;

use App\Services\CpuService;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    protected $cpuService;

    public function __construct(CpuService $cpuService)
    {
        $this->cpuService = $cpuService;
    }

    public function listCpu()
    {
        return $this->cpuService->listCpu();
    }

    public function insertCpu()
    {
        return $this->cpuService->insertCpu();
    }

    public function processInsertCpu(Request $request)
    {
        return $this->cpuService->processInsertCpu($request->all());
    }

    public function updateCpu($id)
    {
        return $this->cpuService->updateCpu($id);
    }

    public function processUpdateCpu(Request $request, $id)
    {
        return $this->cpuService->processUpdateCpu($request->all(), $id);
    }
}
