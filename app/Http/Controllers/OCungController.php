<?php

namespace App\Http\Controllers;

use App\Models\OCung;
use Illuminate\Http\Request;

class OCungController extends Controller
{
    public function list_o_cung()
    {
        $o_cung   =   new OCung();
        $array_o_cung = $o_cung->get_all_o_cung();

        return view('list_o_cung',[
            'array_o_cung'=>$array_o_cung
        ]);
    }

    public function insert_o_cung()
    {
        return view('insert_o_cung');
    }

    public function process_insert_o_cung(Request $request)
    {
        $o_cung   = new OCung();
        $o_cung->loai_o_cung = $request->get('loai_o_cung');
        $o_cung->dung_luong_o_cung = $request->get('dung_luong_o_cung');
        $o_cung->insert_o_cung();

        return redirect()->route('list_o_cung');
    }

    public function update_o_cung($id)
    {
        $o_cung   = new OCung();
        $o_cung->ma_o_cung  = $id;
        $o_cung   = $o_cung->get_one_o_cung();

        return view('update_o_cung',[
            'o_cung'=>$o_cung
        ]);
    }

    public function process_update_o_cung(Request $request,$id)
    {
        $o_cung   = new OCung();
        $o_cung->ma_o_cung  = $id;
        $o_cung->loai_o_cung = $request->get('loai_o_cung');
        $o_cung->dung_luong_o_cung = $request->get('dung_luong_o_cung');
        $o_cung->update_o_cung();

        return redirect()->route('list_o_cung');
    }
}
