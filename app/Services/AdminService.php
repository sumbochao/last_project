<?php


namespace App\Services;


use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class AdminService
{
    private $admin;

    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    public function listAdmin()
    {
        $arrayAdmin = $this->admin->getAllAdmin();

        $title            = 'Danh Sách Admin';
        $metaDescriptions = 'Danh sách toàn bộ admin';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('ListAdmin', [
            'arrayAdmin'       => $arrayAdmin,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function insertAdmin()
    {
        $title            = 'Thêm Admin';
        $metaDescriptions = 'Thêm admin';
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('InsertAdmin',[
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processInsertAdmin($params)
    {
        $file = $params['anhAdmin'];
        $path = Storage::disk('public')->put('Admin', $file);

        $this->admin->tai_khoan    = $params['taiKhoan'];
        $this->admin->mat_khau     = Hash::make($params['matKhau']);
        $this->admin->anh_admin    = $path;
        $this->admin->ho_ten_admin = $params['hoTenAdmin'];
        $this->admin->ngay_sinh    = $params['ngaySinh'];
        $this->admin->gioi_tinh    = $params['gioiTinh'];
        $this->admin->email        = $params['email'];
        $this->admin->sdt          = $params['sdt'];
        $this->admin->dia_chi      = $params['diaChi'];
        $this->admin->cap_do       = $params['capDo'];
        $this->admin->insertAdmin();

        return redirect()->route('listAdmin')->with('success', 'Thêm admin thành công');
    }

    public function updateAdmin($id)
    {
        $this->admin->ma_admin = $id;
        $admin = $this->admin->getOneAdmin();

        $title            = 'Sửa Admin';
        $metaDescriptions = 'Sửa admin ' . $admin->ho_ten_admin;
        $metaKeywords     = 'Quản lý DCComputer';
        $urlCanonical     = URL::current();

        return view('UpdateAdmin', [
            'admin'            => $admin,
            'title'            => $title,
            'metaDescriptions' => $metaDescriptions,
            'metaKeywords'     => $metaKeywords,
            'urlCanonical'     => $urlCanonical,
        ]);
    }

    public function processUpdateAdmin($params, $id)
    {
        $this->admin->ma_admin = $id;
        $this->admin->ho_ten_admin = $params['hoTenAdmin'];
        $this->admin->email = $params['email'];
        $this->admin->updateAdmin();

        return redirect()->route('listAdmin')->with('success', 'Sửa admin thành công');
    }

    public function deleteAdmin($id)
    {
        $this->admin->ma_admin = $id;
        $this->admin->deleteAdmin();

        return redirect()->route('listAdmin')->with('success', 'Xóa admin thành công');
    }
}
