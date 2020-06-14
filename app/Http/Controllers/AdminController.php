<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function list_admin()
    {
        $admin  = new Admin();
        $array_admin = $admin->get_all_admin();

        return view('list_admin',[
            'array_admin'=> $array_admin
        ]);
    }

    public function insert_admin()
    {
        return view('insert_admin');
    }

    public function process_insert_admin(Request $request)
    {
        $admin  = new Admin();
        $admin->tai_khoan   = $request->tai_khoan;
        $admin->mat_khau   = Hash::make($request->mat_khau);
        $admin->anh_admin   = $request->anh_admin;
        $admin->ho_ten_admin   = $request->ho_ten_admin;
        $admin->ngay_sinh   = $request->ngay_sinh;
        $admin->gioi_tinh   = $request->gioi_tinh;
        $admin->email   = $request->email;
        $admin->sdt   = $request->sdt;
        $admin->dia_chi   = $request->dia_chi;
        $admin->cap_do   = $request->cap_do;
        $admin->insert_admin();

        return redirect()->route('list_admin');
    }

    public function update_admin($id)
    {
        $admin = new Admin();
        $admin->ma_admin = $id;
        $admin           = $admin->get_one_admin();

        return view('update_admin',[
            'admin' => $admin
        ]);
    }

    public function process_update_admin($id)
    {
        $admin  = new Admin();
        $admin->ma_admin    = $id;
        $admin->ho_ten_admin    = Request::get('ho_ten_admin');
        $admin->email    = Request::get('email');
        $admin->update_admin();

        return redirect()->route('list_admin');
    }

    public function delete_admin($id)
    {
        $admin = new Admin();
        $admin->ma_admin    = $id;
        $admin->delete_admin();

        return redirect()->route('list_admin');
    }
}
