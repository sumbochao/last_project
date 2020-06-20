<?php

namespace App\Http\Controllers;

use App\Models\LoaiMay;
use Illuminate\Http\Request;

class LoaiMayController extends Controller
{
    public function list_loai_may()
    {
        $loai_may   =   new LoaiMay();
        $array_loai_may = $loai_may->get_all_loai_may();

        return view('list_loai_may',[
            'array_loai_may'=>$array_loai_may
        ]);
    }

    public function insert_loai_may()
    {
        return view('insert_loai_may');
    }

    public function process_insert_loai_may(Request $request)
    {
        $loai_may   = new LoaiMay();
        $loai_may->ten_loai_may = $request->get('ten_loai_may');
        $loai_may->insert_loai_may();

        return redirect()->route('list_loai_may');
    }

    public function update_loai_may($id)
    {
        $loai_may   = new LoaiMay();
        $loai_may->ma_loai_may  = $id;
        $loai_may   = $loai_may->get_one_loai_may();

        return view('update_loai_may',[
            'loai_may'=>$loai_may
        ]);
    }

    public function process_update_loai_may(Request $request,$id)
    {
        $loai_may   = new LoaiMay();
        $loai_may->ma_loai_may  = $id;
        $loai_may->ten_loai_may = $request->get('ten_loai_may');
        $loai_may->update_loai_may();

        return redirect()->route('list_loai_may');
    }
}
