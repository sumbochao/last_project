<?php

namespace App\Http\Controllers;

use App\Models\HangSanXuat;
use Illuminate\Http\Request;

class HangSanXuatController extends Controller
{
    public function list_hang_san_xuat()
    {
        $hang_san_xuat  = new HangSanXuat();
        $array_hang_san_xuat = $hang_san_xuat->get_all_hang_san_xuat();

        return view('list_hang_san_xuat',[
            'array_hang_san_xuat'=> $array_hang_san_xuat
        ]);
    }

    public function insert_hang_san_xuat()
    {
        return view('insert_hang_san_xuat');
    }

    public function process_insert_hang_san_xuat(Request $request)
    {
        $hang_san_xuat  = new HangSanXuat();
        $hang_san_xuat->ten_hang_san_xuat   = $request->ten_hang_san_xuat;
        $hang_san_xuat->insert_hang_san_xuat();

        return redirect()->route('list_hang_san_xuat');
    }

    public function update_hang_san_xuat($id)
    {
        $hang_san_xuat = new HangSanXuat();
        $hang_san_xuat->ma_hang_san_xuat = $id;
        $hang_san_xuat           = $hang_san_xuat->get_one_hang_san_xuat();

        return view('update_hang_san_xuat',[
            'hang_san_xuat' => $hang_san_xuat
        ]);
    }

    public function process_update_hang_san_xuat(Request $request,$id)
    {
        $hang_san_xuat  = new HangSanXuat();
        $hang_san_xuat->ma_hang_san_xuat    = $id;
        $hang_san_xuat->ten_hang_san_xuat    = $request->ten_hang_san_xuat;
        $hang_san_xuat->update_hang_san_xuat();

        return redirect()->route('list_hang_san_xuat');
    }
}
