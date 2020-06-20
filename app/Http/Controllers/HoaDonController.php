<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function list_hoa_don()
    {
        $hoa_don    = new HoaDon();
        $array_hoa_don  = $hoa_don->get_all_hoa_don();

        return view('list_hoa_don',[
            'array_hoa_don'=>$array_hoa_don
        ]);
    }
}
