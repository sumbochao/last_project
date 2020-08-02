<?php

namespace App\Http\Controllers;


use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function viewShop()
    {
        return $this->pageService->viewShop();
    }

    public function viewSanPhamFromHangSanXuat($id)
    {
        return $this->pageService->viewSanPhamFromHangSanXuat($id);
    }

    public function viewSanPhamFromLoaiMay($id)
    {
        return $this->pageService->viewSanPhamFromLoaiMay($id);
    }

    public function home()
    {
        return $this->pageService->home();
    }

    public function viewChiTietSanPham($id)
    {
        return $this->pageService->viewChiTietSanPham($id);
    }

    public function checkOut()
    {
        return $this->pageService->checkOut();
    }

    public function searchSanPham(Request $request)
    {
        return $this->pageService->searchSanPham($request->all());
    }

    public function historyHoaDon()
    {
        return $this->pageService->historyHoaDon();
    }

    public function historyHoaDonChiTiet($id)
    {
        return $this->pageService->historyHoaDonChiTiet($id);
    }
}
