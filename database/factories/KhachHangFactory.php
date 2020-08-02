<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\KhachHang::class, function (Faker $faker) {
    return [
        'tai_khoan'         => $faker->userName,
        'mat_khau'          => \Illuminate\Support\Facades\Hash::make('123'),
        'ho_ten_khach_hang' => $faker->name,
        'email'             => $faker->email,
        'ngay_sinh'         => $faker->dateTimeBetween('1999-01-01', '2030-01-01'),
        'gioi_tinh'         => $faker->boolean,
        'sdt'               => $faker->phoneNumber,
        'dia_chi'           => $faker->address,
    ];
});
