<?php

namespace App\Services;

class LayoutService
{
    public function layoutAdmin()
    {
        return view('LayoutAdmin.Master');
    }

    public function layoutNguoiDung()
    {
        return view('LayoutWebsite.Master');
    }
}
