<?php

namespace App\Http\Controllers;

use App\Models\CauHinh;
use Illuminate\Http\Request;

class CauHinhController extends Controller
{
    public function list_cau_hinh()
    {
        $cau_hinh  = new CauHinh();
        $array_cau_hinh = $cau_hinh->get_all_cau_hinh();

        return view('list_cau_hinh',[
            'array_cau_hinh'=> $array_cau_hinh
        ]);
    }

    public function insert_cau_hinh()
    {
        return view('insert_cau_hinh');
    }

    public function process_insert_cau_hinh(Request $request)
    {
        $cau_hinh  = new CauHinh();
        $cau_hinh->ten_cau_hinh   = $request->ten_cau_hinh;
        $cau_hinh->insert_cau_hinh();

        return redirect()->route('list_cau_hinh');
    }

    public function update_cau_hinh($id)
    {
        $cau_hinh = new CauHinh();
        $cau_hinh->ma_cau_hinh = $id;
        $cau_hinh           = $cau_hinh->get_one_cau_hinh();

        return view('update_cau_hinh',[
            'cau_hinh' => $cau_hinh
        ]);
    }

    public function process_update_cau_hinh(Request $request,$id)
    {
        $cau_hinh  = new CauHinh();
        $cau_hinh->ma_cau_hinh    = $id;
        $cau_hinh->ten_cau_hinh    = $request->ten_cau_hinh;
        $cau_hinh->update_cau_hinh();

        return redirect()->route('list_cau_hinh');
    }
}
