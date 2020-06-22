<?php

namespace App\Http\Controllers;

use App\Models\Cpu;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    public function list_cpu()
    {
        $cpu  = new Cpu();
        $array_cpu = $cpu->get_all_cpu();

        return view('list_cpu',[
            'array_cpu'=> $array_cpu
        ]);
    }

    public function insert_cpu()
    {
        return view('insert_cpu');
    }

    public function process_insert_cpu(Request $request)
    {
        $cpu  = new Cpu();
        $cpu->ten_cpu   = $request->ten_cpu;
        $cpu->tan_so_cpu   = $request->tan_so_cpu;
        $cpu->bo_nho_cache   = $request->bo_nho_cache;
        $cpu->dong_cpu   = $request->dong_cpu;
        $cpu->insert_cpu();

        return redirect()->route('list_cpu');
    }

    public function update_cpu($id)
    {
        $cpu = new Cpu();
        $cpu->ma_cpu = $id;
        $cpu           = $cpu->get_one_cpu();

        return view('update_cpu',[
            'cpu' => $cpu
        ]);
    }

    public function process_update_cpu(Request $request,$id)
    {
        $cpu  = new Cpu();
        $cpu->ma_cpu    = $id;
        $cpu->ten_cpu   = $request->ten_cpu;
        $cpu->tan_so_cpu   = $request->tan_so_cpu;
        $cpu->bo_nho_cache   = $request->bo_nho_cache;
        $cpu->dong_cpu   = $request->dong_cpu;
        $cpu->update_cpu();

        return redirect()->route('list_cpu');
    }
}
