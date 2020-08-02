<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HoaDonChiTiet extends Model
{
    protected $table = 'hoa_don_chi_tiet';
    public $ma_hoa_don;
    public $ma_san_pham;
    public $so_luong;
    public $gia;

    public function getAllHoaDonChiTiet()
    {
        return $array = DB::table($this->table)
            ->leftJoin('hoa_don', "$this->table.ma_hoa_don", '=', 'hoa_don.ma_hoa_don')
            ->leftJoin('san_pham', "$this->table.ma_san_pham", '=', 'san_pham.ma_san_pham')
            ->select("$this->table.*", 'hoa_don.ma_khach_hang', 'san_pham.ten_san_pham')
            ->where('hoa_don.ma_hoa_don', $this->ma_hoa_don)
            ->get();
    }

    public function insertHoaDonChiTiet()
    {
        DB::table('hoa_don_chi_tiet')->insert([
            'ma_hoa_don' => $this->ma_hoa_don,
            'ma_san_pham' => $this->ma_san_pham,
            'so_luong' => $this->so_luong,
            'gia' => $this->gia,
        ]);
    }
}
