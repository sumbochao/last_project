<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function layout_admin()
    {
        return view('layout_admin.master');
    }

    public function layout_nguoi_dung()
    {
        return view('layout_website.master');
    }

    public function view_shop()
    {
        return view('shop');
    }

    public function home()
    {
        return view('menu');
    }

    public function admin_sign_in()
    {
        return view('admin_sign_in');
    }

    public function process_admin_sign_in(Request $request)
    {
        $admin                 = new Admin();
        $admin->tai_khoan      = $request->tai_khoan;
        $admin->mat_khau       = Hash::check($request->mat_khau,$admin->mat_khau);
        $admin                 = $admin->get_one_admin_sign_in();

        if (count($admin)      == 1) {
            Session::put('ma_admin', $admin[0]->ma_admin);
            Session::put('ho_ten_admin', $admin[0]->ho_ten_admin);
            Session::put('anh_admin', $admin[0]->anh_admin);

            return redirect()->route('welcome_admin');
        } else {
            return redirect()->route('admin_sign_in')->with('error', 'Đăng nhập thất bại, vui lòng đăng nhập tài khoản của admin');
        }

    }

    public function welcome_admin()
    {
        return view('welcome_admin');
    }

    public function admin_sign_out()
    {
        /*Session::forget('ma_admin');*/

        Session::flush();

        return redirect()->route('admin_sign_in')->with('success', 'Đăng xuất thành công');
    }
}
