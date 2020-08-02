<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ram extends Model
{
    protected $table = 'ram';
    public $ma_ram;
    public $loai_ram;
    public $dung_luong_ram;
    public $tan_so_ram;

    public function getAllRam()
    {
        $array = DB::table($this->table)->get();
        return $array;
    }

    public function insertRam()
    {
        DB::table($this->table)->insert([
            'loai_ram' => $this->loai_ram,
            'dung_luong_ram' => $this->dung_luong_ram,
            'tan_so_ram' => $this->tan_so_ram
        ]);
    }

    public function getOneRam()
    {
        $array = DB::table($this->table)->where('ma_ram', $this->ma_ram)->limit(1)->get();
        return $array[0];
    }

    public function updateRam()
    {
        DB::table($this->table)
            ->where('ma_ram', $this->ma_ram)
            ->update([
                'loai_ram' => $this->loai_ram,
                'dung_luong_ram' => $this->dung_luong_ram,
                'tan_so_ram' => $this->tan_so_ram
            ]);
    }
}
