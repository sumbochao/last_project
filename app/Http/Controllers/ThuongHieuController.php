<?php

namespace App\Http\Controllers;

use App\Models\ThuongHieu;
use Illuminate\Http\Request;

class ThuongHieuController extends Controller
{
    public function list_thuong_hieu()
    {
        $thuong_hieu  = new ThuongHieu();
        $array_thuong_hieu = $thuong_hieu->get_all_thuong_hieu();

        return view('list_thuong_hieu',[
            'array_thuong_hieu'=> $array_thuong_hieu
        ]);
    }

    public function insert_thuong_hieu()
    {
        return view('insert_thuong_hieu');
    }

    public function process_insert_thuong_hieu(Request $request)
    {
        $thuong_hieu  = new ThuongHieu();
        $thuong_hieu->ten_thuong_hieu   = $request->ten_thuong_hieu;
        $thuong_hieu->insert_thuong_hieu();

        return redirect()->route('list_thuong_hieu');
    }

    public function update_thuong_hieu($id)
    {
        $thuong_hieu = new ThuongHieu();
        $thuong_hieu->ma_thuong_hieu = $id;
        $thuong_hieu           = $thuong_hieu->get_one_thuong_hieu();

        return view('update_thuong_hieu',[
            'thuong_hieu' => $thuong_hieu
        ]);
    }

    public function process_update_thuong_hieu(Request $request,$id)
    {
        $thuong_hieu  = new ThuongHieu();
        $thuong_hieu->ma_thuong_hieu    = $id;
        $thuong_hieu->ten_thuong_hieu    = $request->ten_thuong_hieu;
        $thuong_hieu->update_thuong_hieu();

        return redirect()->route('list_thuong_hieu');
    }
}
