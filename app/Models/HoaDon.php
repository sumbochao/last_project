<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class HoaDon
{
    private $table  = 'hoa_don';
    public $ma_hoa_don;
    public $ma_khach_hang;
    public $ma_thanh_toan;
    public $tong_tien;
    public $tinh_trang;

    public function get_all_hoa_don()
    {
        $array  = DB::table($this->table)
            ->leftJoin('khach_hang',"$this->ma_khach_hang",'=','khach_hang.ma_khach_hang')
            ->leftJoin('thanh_toan',"$this->ma_thanh_toan",'=','thanh_toan.ma_thanh_toan')
            ->get();
        return $array;
    }
}
