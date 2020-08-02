<?php

namespace App\Http\Controllers;

use App\Services\OCungService;
use Illuminate\Http\Request;

class OCungController extends Controller
{
    protected $oCungService;

    public function __construct(OCungService $oCungService)
    {
        $this->oCungService = $oCungService;
    }

    public function listOCung()
    {
        return $this->oCungService->listOCung();
    }

    public function insertOCung()
    {
        return $this->oCungService->insertOCung();
    }

    public function processInsertOCung(Request $request)
    {
        return $this->oCungService->processInsertOCung($request->all());
    }

    public function updateOCung($id)
    {
        return $this->oCungService->updateOCung($id);
    }

    public function processUpdateOCung(Request $request, $id)
    {
        return $this->oCungService->processUpdateOCung($request->all(), $id);
    }
}
