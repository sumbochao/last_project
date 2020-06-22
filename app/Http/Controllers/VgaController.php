<?php

namespace App\Http\Controllers;

use App\Models\Vga;
use Illuminate\Http\Request;

class VgaController extends Controller
{
    public function list_vga()
    {
        $vga   =   new Vga();
        $array_vga = $vga->get_all_vga();

        return view('list_vga',[
            'array_vga'=>$array_vga
        ]);
    }

    public function insert_vga()
    {
        return view('insert_vga');
    }

    public function process_insert_vga(Request $request)
    {
        $vga   = new Vga();
        $vga->loai_vga = $request->get('loai_vga');
        $vga->ten_vga = $request->get('ten_vga');
        $vga->dung_luong_vga = $request->get('dung_luong_vga');
        $vga->insert_vga();

        return redirect()->route('list_vga');
    }

    public function update_vga($id)
    {
        $vga   = new Vga();
        $vga->ma_vga  = $id;
        $vga   = $vga->get_one_vga();

        return view('update_vga',[
            'vga'=>$vga
        ]);
    }

    public function process_update_vga(Request $request,$id)
    {
        $vga   = new Vga();
        $vga->ma_vga  = $id;
        $vga->loai_vga = $request->get('loai_vga');
        $vga->ten_vga = $request->get('ten_vga');
        $vga->dung_luong_vga = $request->get('dung_luong_vga');
        $vga->update_vga();

        return redirect()->route('list_vga');
    }
}
