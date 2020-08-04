<?php


namespace App\Services;


use App\Models\Cpu;
use App\Models\HangSanXuat;
use App\Models\LoaiMay;
use App\Models\ManHinh;
use App\Models\OCung;
use App\Models\Ram;
use App\Models\SanPham;
use App\Models\Vga;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class SanPhamService
{
    private $cpu;
    private $hangSanXuat;
    private $loaiMay;
    private $manHinh;
    private $oCung;
    private $ram;
    private $sanPham;
    private $vga;

    public function __construct(Cpu $cpu, HangSanXuat $hangSanXuat, LoaiMay $loaiMay, ManHinh $manHinh, OCung $oCung, Ram $ram, SanPham $sanPham, Vga $vga)
    {
        $this->cpu         = $cpu;
        $this->hangSanXuat = $hangSanXuat;
        $this->loaiMay     = $loaiMay;
        $this->manHinh     = $manHinh;
        $this->oCung       = $oCung;
        $this->ram         = $ram;
        $this->sanPham     = $sanPham;
        $this->vga         = $vga;
    }

    public function listSanPham()
    {
        $arraySanPham = $this->sanPham->getAllSanPham();

        $title            = 'Danh Sách Sản Phẩm';
        $metaDescriptions = 'Danh sách toàn bộ sản phẩm';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListSanPham', [
            'arraySanPham'     => $arraySanPham,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function insertSanPham()
    {
        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $arrayManHinh     = $this->manHinh->getAllManHinh();

        $arrayRam         = $this->ram->getAllRam();

        $arrayCpu         = $this->cpu->getAllCpu();

        $arrayVga         = $this->vga->getAllVga();

        $arrayOCung       = $this->oCung->getAllOCung();

        $title            = 'Thêm Sản Phẩm';
        $metaDescriptions = 'Thêm Sản Phẩm';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('InsertSanPham', [
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arrayManHinh'     => $arrayManHinh,
            'arrayRam'         => $arrayRam,
            'arrayCpu'         => $arrayCpu,
            'arrayVga'         => $arrayVga,
            'arrayOCung'       => $arrayOCung,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processInsertSanPham($params)
    {
        $file = $params['anhSanPham'];
        $path = Storage::disk('public')->put('SanPham', $file);

        $this->sanPham->anh_san_pham     = $path;
        $this->sanPham->ten_san_pham     = $params['tenSanPham'];
        $this->sanPham->mo_ta            = $params['moTa'];
        $this->sanPham->ma_hang_san_xuat = $params['maHangSanXuat'];
        $this->sanPham->ma_loai_may      = $params['maLoaiMay'];
        $this->sanPham->ma_man_hinh      = $params['maManHinh'];
        $this->sanPham->ma_ram           = $params['maRam'];
        $this->sanPham->ma_cpu           = $params['maCpu'];
        $this->sanPham->ma_vga           = $params['maVga'];
        $this->sanPham->ma_o_cung        = $params['maOCung'];
        $this->sanPham->so_luong         = $params['soLuong'];
        $this->sanPham->gia              = $params['gia'];
        $this->sanPham->insertSanPham();

        return redirect()->route('listSanPham');
    }

    public function updateSanPham($id)
    {
        $arrayHangSanXuat = $this->hangSanXuat->getAllHangSanXuat();

        $arrayLoaiMay     = $this->loaiMay->getAllLoaiMay();

        $arrayManHinh     = $this->manHinh->getAllManHinh();

        $arrayRam         = $this->ram->getAllRam();

        $arrayCpu         = $this->cpu->getAllCpu();

        $arrayVga         = $this->vga->getAllVga();

        $arrayOCung       = $this->oCung->getAllOCung();

        $this->sanPham->ma_san_pham = $id;
        $sanPham = $this->sanPham->getOneSanPham();

        $title            = 'Sửa Sản Phẩm';
        $metaDescriptions = 'Sửa sản phẩm ' . $sanPham->ten_san_pham;
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateSanPham', [
            'arrayHangSanXuat' => $arrayHangSanXuat,
            'arrayLoaiMay'     => $arrayLoaiMay,
            'arrayManHinh'     => $arrayManHinh,
            'arrayRam'         => $arrayRam,
            'arrayCpu'         => $arrayCpu,
            'arrayVga'         => $arrayVga,
            'arrayOCung'       => $arrayOCung,
            'sanPham'          => $sanPham,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processUpdateSanPham($params, $id)
    {
        $file = $params['anhSanPham'];
        $path = Storage::disk('public')->put('SanPham', $file);

        $this->sanPham->ma_san_pham      = $id;
        $this->sanPham->anh_san_pham     = $path;
        $this->sanPham->ten_san_pham     = $params['tenSanPham'];
        $this->sanPham->mo_ta            = $params['moTa'];
        $this->sanPham->ma_hang_san_xuat = $params['maHangSanXuat'];
        $this->sanPham->ma_loai_may      = $params['maLoaiMay'];
        $this->sanPham->ma_man_hinh      = $params['maManHinh'];
        $this->sanPham->ma_ram           = $params['maRam'];
        $this->sanPham->ma_cpu           = $params['maCpu'];
        $this->sanPham->ma_vga           = $params['maVga'];
        $this->sanPham->ma_o_cung        = $params['maOCung'];
        $this->sanPham->so_luong         = $params['soLuong'];
        $this->sanPham->gia              = $params['gia'];
        $this->sanPham->updateSanPham();

        return redirect()->route('listSanPham');
    }

    public function deleteSanPham($id)
    {
        $this->sanPham->ma_san_pham = $id;
        $this->sanPham->deleteSanPham();

        return redirect()->route('listSanPham');
    }
}
