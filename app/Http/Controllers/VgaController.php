<?php

namespace App\Http\Controllers;

use App\Services\VgaService;
use Illuminate\Http\Request;

class VgaController extends Controller
{
    protected $vgaService;

    public function __construct(VgaService $vgaService)
    {
        $this->vgaService = $vgaService;
    }

    public function listVga()
    {
        return $this->vgaService->listVga();
    }

    public function insertVga()
    {
        return $this->vgaService->insertVga();
    }

    public function processInsertVga(Request $request)
    {
        return $this->vgaService->processInsertVga($request->all());
    }

    public function updateVga($id)
    {
        return $this->vgaService->updateVga($id);
    }

    public function processUpdateVga(Request $request, $id)
    {
        return $this->vgaService->processUpdateVga($request->all(), $id);
    }
}
