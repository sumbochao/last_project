<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CauHinh extends Model
{
    protected $table = 'cau_hinh';
    protected $fillable =['ten_cau_hinh'];
    public $primarykey = 'ma_cau_hinh';
    public $timestamps = false;

    public function get_all_cau_hinh()
    {
        $array  = CauHinh::all();
        return $array;
    }

    public function insert_cau_hinh()
    {

    }
}
