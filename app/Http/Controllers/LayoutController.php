<?php

namespace App\Http\Controllers;


use App\Services\LayoutService;

class LayoutController extends Controller
{
    protected $layoutService;

    public function __construct(LayoutService $layoutService)
    {
        $this->layoutService = $layoutService;
    }

    public function layoutAdmin()
    {
        return $this->layoutService->layoutAdmin();
    }

    public function layoutNguoiDung()
    {
        return $this->layoutService->layoutNguoiDung();
    }
}
