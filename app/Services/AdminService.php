<?php


namespace App\Services;


use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

        return view('ListAdmin', [
            'arrayAdmin' => $arrayAdmin,
        ]);
    }

    public function insertAdmin()
    {
        return view('InsertAdmin');
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

        return redirect()->route('listAdmin');
    }

    public function updateAdmin($id)
    {
        $this->admin->ma_admin = $id;
        $admin = $this->admin->getOneAdmin();

        return view('UpdateAdmin', [
            'admin' => $admin,
        ]);
    }

    public function processUpdateAdmin($params, $id)
    {
        $this->admin->ma_admin = $id;
        $this->admin->ho_ten_admin = $params['hoTenAdmin'];
        $this->admin->email = $params['email'];
        $this->admin->updateAdmin();

        return redirect()->route('listAdmin');
    }

    public function deleteAdmin($id)
    {
        $this->admin->ma_admin = $id;
        $this->admin->deleteAdmin();

        return redirect()->route('listAdmin');
    }
}