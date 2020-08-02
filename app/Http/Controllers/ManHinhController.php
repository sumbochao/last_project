<?php

namespace App\Http\Controllers;

use App\Services\ManHinhService;
use Illuminate\Http\Request;

class ManHinhController extends Controller
{
    protected $manHinhService;

    public function __construct(ManHinhService $manHinhService)
    {
        $this->manHinhService = $manHinhService;
    }

    public function listManHinh()
    {
        return $this->manHinhService->listManHinh();
    }

    public function insertManHinh()
    {
        return $this->manHinhService->insertManHinh();
    }

    public function processInsertManHinh(Request $request)
    {
        return $this->manHinhService->processInsertManHinh($request->all());
    }

    public function updateManHinh($id)
    {
        return $this->manHinhService->updateManHinh($id);
    }

    public function processUpdateManHinh(Request $request, $id)
    {
        return $this->manHinhService->processUpdateManHinh($request->all(), $id);
    }
}
