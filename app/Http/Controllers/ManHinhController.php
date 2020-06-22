<?php

namespace App\Http\Controllers;

use App\Models\ManHinh;
use Illuminate\Http\Request;

class ManHinhController extends Controller
{
    public function list_man_hinh()
    {
        $man_hinh   = new ManHinh();
        $array_man_hinh = $man_hinh->get_all_man_hinh();

        return view('list_man_hinh',[
            'array_man_hinh'=>$array_man_hinh
        ]);
    }

    public function insert_man_hinh()
    {
        return view('insert_man_hinh');
    }

    public function process_insert_man_hinh(Request $request)
    {
        $man_hinh   = new ManHinh();
        $man_hinh->kich_co  = $request->get('kich_co');
        $man_hinh->do_phan_giai  = $request->get('do_phan_giai');
        $man_hinh->tan_so_man_hinh  = $request->get('tan_so_man_hinh');
        $man_hinh->tam_nen  = $request->get('tam_nen');
        $man_hinh->insert_man_hinh();

        return redirect()->route('list_man_hinh');
    }

    public function update_man_hinh($id)
    {
        $man_hinh   = new ManHinh();
        $man_hinh->ma_man_hinh  = $id;
        $man_hinh   = $man_hinh->get_one_man_hinh();

        return view('update_man_hinh',
            [
                'man_hinh'=>$man_hinh
            ]
        );
    }

    public function process_update_man_hinh(Request $request,$id)
    {
        $man_hinh   = new ManHinh();
        $man_hinh->ma_man_hinh  = $id;
        $man_hinh->kich_co  = $request->get('kich_co');
        $man_hinh->do_phan_giai  = $request->get('do_phan_giai');
        $man_hinh->tan_so_man_hinh  = $request->get('tan_so_man_hinh');
        $man_hinh->tam_nen  = $request->get('tam_nen');
        $man_hinh->update_man_hinh();

        return redirect()->route('list_man_hinh');
    }
}
