<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoaiMay extends Model
{
    protected $table = 'loai_may';
    public $ma_loai_may;
    public $ten_loai_may;

    public function getAllLoaiMay()
    {
        $array = DB::table($this->table)->get();
        return $array;
    }

    public function insertLoaiMay()
    {
        DB::table($this->table)->insert([
            'ten_loai_may' => $this->ten_loai_may
        ]);
    }

    public function getOneLoaiMay()
    {
        $array = DB::table($this->table)
            ->where('ma_loai_may', $this->ma_loai_may)
            ->limit(1)
            ->get();
        return $array[0];
    }

    public function updateLoaiMay()
    {
        DB::table($this->table)
            ->where('ma_loai_may', $this->ma_loai_may)
            ->update([
                'ten_loai_may' => $this->ten_loai_may
            ]);
    }
}
