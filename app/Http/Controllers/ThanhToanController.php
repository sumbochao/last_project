<?php

namespace App\Http\Controllers;

use App\Models\ThanhToan;
use Illuminate\Http\Request;

class ThanhToanController extends Controller
{
    public function list_thanh_toan()
    {
        $thanh_toan = new ThanhToan();
        $array_thanh_toan   = $thanh_toan->get_all_thanh_toan();

        return view('list_thanh_toan',[
            'array_thanh_toan'=>$array_thanh_toan
        ]);
    }

    public function insert_thanh_toan()
    {
        return view('insert_thanh_toan');
    }

    public function process_insert_thanh_toan(Request $request)
    {
        $thanh_toan = new ThanhToan();
        $thanh_toan->phuong_thuc_thanh_toan = $request->phuong_thuc_thanh_toan;
        $thanh_toan->insert_thanh_toan();

        return redirect()->route('list_thanh_toan');
    }

    public function update_thanh_toan($id)
    {
        $thanh_toan = new ThanhToan();
        $thanh_toan->ma_thanh_toan  = $id;
        $thanh_toan = $thanh_toan->get_one_thanh_toan();

        return view('update_thanh_toan',[
            'thanh_toan'=>$thanh_toan
        ]);
    }

    public function process_update_thanh_toan(Request $request,$id)
    {
        $thanh_toan = new ThanhToan();
        $thanh_toan->ma_thanh_toan  = $id;
        $thanh_toan->phuong_thuc_thanh_toan = $request->phuong_thuc_thanh_toan;
        $thanh_toan->update_thanh_toan();

        return redirect()->route('list_thanh_toan');
    }

    public function delete_thanh_toan($id)
    {
        $thanh_toan = new ThanhToan();
        $thanh_toan->ma_thanh_toan  = $id;
        $thanh_toan->delete_thanh_toan();

        return redirect()->route('list_thanh_toan');
    }
}
