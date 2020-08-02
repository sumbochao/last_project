<?php

namespace App\Http\Controllers;

use App\Services\RamService;
use Illuminate\Http\Request;

class RamController extends Controller
{
    protected $ramService;

    public function __construct(RamService $ramService)
    {
        $this->ramService = $ramService;
    }

    public function listRam()
    {
        return $this->ramService->listRam();
    }

    public function insertRam()
    {
        return $this->ramService->insertRam();
    }

    public function processInsertRam(Request $request)
    {
        return $this->ramService->processInsertRam($request->all());
    }

    public function updateRam($id)
    {
        return $this->ramService->updateRam($id);
    }

    public function processUpdateRam(Request $request, $id)
    {
        return $this->ramService->processUpdateRam($request->all(), $id);
    }
}
