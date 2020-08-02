<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('admin')->insert([
            'tai_khoan'    => 'admin',
            'mat_khau'     => \Illuminate\Support\Facades\Hash::make('123'),
            'anh_admin'    => 'Admin/4qU2GHRQqEiQnCcZzFZwdQjqWHDmRwaJzYa00VK7.jpeg',
            'ho_ten_admin' => 'Lê Tiến Đạt',
            'email'        => 'tiendat15599.dev@gmail.com',
            'ngay_sinh'    => '1999-05-15',
            'gioi_tinh'    => 0,
            'sdt'          => '0393220275',
            'dia_chi'      => '19 Ngọc Lâm,Long Biên,Hà Nội',
            'cap_do'       => 1,
        ]);
    }
}
