<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HoaDon extends Model
{
    protected $table = 'hoa_don';
    public $ma_hoa_don;
    public $ma_khach_hang;
    public $ma_thanh_toan;
    public $tong_tien;
    public $tinh_trang;
    public $created_at;

    public function getAllHoaDon()
    {
        $array = DB::table($this->table)
            ->leftJoin('khach_hang', "$this->table.ma_khach_hang", '=', 'khach_hang.ma_khach_hang')
            ->leftJoin('thanh_toan', "$this->table.ma_thanh_toan", '=', 'thanh_toan.ma_thanh_toan')
            ->select("$this->table.*", 'khach_hang.ho_ten_khach_hang', 'thanh_toan.phuong_thuc_thanh_toan')
            ->get();
        return $array;
    }

    public function getOneHoaDon()
    {
        $array = DB::table($this->table)
            ->where('ma_hoa_don', $this->ma_hoa_don)
            ->limit(1)
            ->get();
        return $array[0];
    }

    public function getAllHoaDonForOneKhachHang()
    {
        return $array = DB::table($this->table)
            ->leftJoin('khach_hang', "$this->table.ma_khach_hang", '=', 'khach_hang.ma_khach_hang')
            ->leftJoin('thanh_toan', "$this->table.ma_thanh_toan", '=', 'thanh_toan.ma_thanh_toan')
            ->select("$this->table.*", 'khach_hang.ho_ten_khach_hang', 'thanh_toan.phuong_thuc_thanh_toan')
            ->where('khach_hang.ma_khach_hang', $this->ma_khach_hang)
            ->get();
    }

    public function insertHoaDonGetId()
    {
        $hoaDonId = DB::table($this->table)->insertGetId([
            'ma_khach_hang' => $this->ma_khach_hang,
            'ma_thanh_toan' => $this->ma_thanh_toan,
            'tong_tien' => $this->tong_tien,
            'tinh_trang' => $this->tinh_trang,
            'created_at' => $this->created_at,
        ]);
        return $hoaDonId;
    }

    public function updateHoaDon()
    {
        DB::table($this->table)->where('ma_hoa_don', $this->ma_hoa_don)->update([
            'tinh_trang' => $this->tinh_trang,
        ]);
    }
}
