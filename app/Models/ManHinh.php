<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ManHinh
{
    private $table  = 'man_hinh';
    public $ma_man_hinh;
    public $kich_co;
    public $do_phan_giai;
    public $tan_so_man_hinh;
    public $tam_nen;

    public function get_all_man_hinh()
    {
        $array  = DB::table($this->table)->get();
        return $array;
    }

    public function insert_man_hinh()
    {
        DB::table($this->table)->insert([
            'kich_co'=>$this->kich_co,
            'do_phan_giai'=>$this->do_phan_giai,
            'tan_so_man_hinh'=>$this->tan_so_man_hinh,
            'tam_nen'=>$this->tam_nen
        ]);
    }

    public function get_one_man_hinh()
    {
        $array  = DB::table($this->table)->where('ma_man_hinh',$this->ma_man_hinh)->limit(1)->get();
        return $array[0];
    }

    public function update_man_hinh()
    {
        DB::table($this->table)->where('ma_man_hinh',$this->ma_man_hinh)->update([
            'kich_co'=>$this->kich_co,
            'do_phan_giai'=>$this->do_phan_giai,
            'tan_so_man_hinh'=>$this->tan_so_man_hinh,
            'tam_nen'=>$this->tam_nen
        ]);
    }
}
