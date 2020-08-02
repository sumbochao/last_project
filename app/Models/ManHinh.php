<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ManHinh extends Model
{
    protected $table = 'man_hinh';
    public $ma_man_hinh;
    public $kich_co;
    public $do_phan_giai;
    public $tan_so_man_hinh;
    public $tam_nen;

    public function getAllManHinh()
    {
        $array = DB::table($this->table)->get();
        return $array;
    }

    public function insertManHinh()
    {
        DB::table($this->table)->insert([
            'kich_co' => $this->kich_co,
            'do_phan_giai' => $this->do_phan_giai,
            'tan_so_man_hinh' => $this->tan_so_man_hinh,
            'tam_nen' => $this->tam_nen
        ]);
    }

    public function getOneManHinh()
    {
        $array = DB::table($this->table)
            ->where('ma_man_hinh', $this->ma_man_hinh)
            ->limit(1)
            ->get();
        return $array[0];
    }

    public function updateManHinh()
    {
        DB::table($this->table)
            ->where('ma_man_hinh', $this->ma_man_hinh)
            ->update([
                'kich_co' => $this->kich_co,
                'do_phan_giai' => $this->do_phan_giai,
                'tan_so_man_hinh' => $this->tan_so_man_hinh,
                'tam_nen' => $this->tam_nen
            ]);
    }
}
