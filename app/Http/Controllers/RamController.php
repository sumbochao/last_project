<?php

namespace App\Http\Controllers;

use App\Models\Ram;
use Illuminate\Http\Request;

class RamController extends Controller
{
    public function list_ram()
    {
        $ram   =   new Ram();
        $array_ram = $ram->get_all_ram();

        return view('list_ram',[
            'array_ram'=>$array_ram
        ]);
    }

    public function insert_ram()
    {
        return view('insert_ram');
    }

    public function process_insert_ram(Request $request)
    {
        $ram   = new Ram();
        $ram->loai_ram  = $request->get('loai_ram');
        $ram->dung_luong_ram = $request->get('dung_luong_ram');
        $ram->tan_so_ram = $request->get('tan_so_ram');
        $ram->insert_ram();

        return redirect()->route('list_ram');
    }

    public function update_ram($id)
    {
        $ram   = new Ram();
        $ram->ma_ram  = $id;
        $ram   = $ram->get_one_ram();

        return view('update_ram',[
            'ram'=>$ram
        ]);
    }

    public function process_update_ram(Request $request,$id)
    {
        $ram   = new Ram();
        $ram->ma_ram  = $id;
        $ram->loai_ram  = $request->get('loai_ram');
        $ram->dung_luong_ram = $request->get('dung_luong_ram');
        $ram->tan_so_ram = $request->get('tan_so_ram');
        $ram->update_ram();

        return redirect()->route('list_ram');
    }
}
