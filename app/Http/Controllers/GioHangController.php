<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class GioHangController extends Controller
{
    public function insert_san_pham_on_gio_hang(Request $request)
    {
        $san_pham   = new SanPham();
        $san_pham->ma_san_pham  = $request->ma_san_pham;
        $so_luong   = $request->so_luong;
    }
}
