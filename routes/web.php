<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("admin_sign_in", "Controller@admin_sign_in")
    ->name("admin_sign_in");

Route::post("process_admin_sign_in", "Controller@process_admin_sign_in")
    ->name("process_admin_sign_in");

Route::get('', 'Controller@home')->name('home');
Route::get('shop', 'Controller@view_shop')->name('view_shop');

Route::group(["prefix" => "admin", "middleware"=>"CheckAdmin"], function () {
    Route::get('', 'Controller@layout_admin');
    Route::get("welcome_admin", "Controller@welcome_admin")->name("welcome_admin");
    Route::get("admin_sign_out", "Controller@admin_sign_out")->name("admin_sign_out");
    Route::get('list_admin', 'AdminController@list_admin')->name('list_admin');
    Route::get('insert_admin','AdminController@insert_admin')->name('insert_admin');
    Route::post('process_insert_admin','AdminController@process_insert_admin')->name('process_insert_admin');
    Route::get('update_admin/{id}','AdminController@update_admin')->name('update_admin');
    Route::post('process_update_admin/{id}','AdminController@process_update_admin')->name('process_update_admin');
    Route::get('delete_admin/{id}','AdminController@delete_admin')->name('delete_admin');

    Route::group(["prefix"=>"cpu"], function () {
        Route::get('','CpuController@list_cpu')->name('list_cpu');
        Route::get('insert_cpu','CpuController@insert_cpu')->name('insert_cpu');
        Route::post('process_insert_cpu','CpuController@process_insert_cpu')->name('process_insert_cpu');
        Route::get('update_cpu/{id}','CpuController@update_cpu')->name('update_cpu');
        Route::post('process_update_cpu/{id}','CpuController@process_update_cpu')->name('process_update_cpu');
    });

    Route::group(["prefix"=>"hang_san_xuat"], function () {
        Route::get('','HangSanXuatController@list_hang_san_xuat')->name('list_hang_san_xuat');
        Route::get('insert_hang_san_xuat','HangSanXuatController@insert_hang_san_xuat')->name('insert_hang_san_xuat');
        Route::post('process_insert_hang_san_xuat','HangSanXuatController@process_insert_hang_san_xuat')->name('process_insert_hang_san_xuat');
        Route::get('update_hang_san_xuat/{id}','HangSanXuatController@update_hang_san_xuat')->name('update_hang_san_xuat');
        Route::post('process_update_hang_san_xuat/{id}','HangSanXuatController@process_update_hang_san_xuat')->name('process_update_hang_san_xuat');
    });

    Route::group(["prefix"=>"loai_may"], function () {
        Route::get('','LoaiMayController@list_loai_may')->name('list_loai_may');
        Route::get('insert_loai_may','LoaiMayController@insert_loai_may')->name('insert_loai_may');
        Route::post('process_insert_loai_may','LoaiMayController@process_insert_loai_may')->name('process_insert_loai_may');
        Route::get('update_loai_may/{id}','LoaiMayController@update_loai_may')->name('update_loai_may');
        Route::post('process_update_loai_may/{id}','LoaiMayController@process_update_loai_may')->name('process_update_loai_may');
    });

    Route::group(["prefix"=>"man_hinh"], function () {
        Route::get('','ManHinhController@list_man_hinh')->name('list_man_hinh');
        Route::get('insert_man_hinh','ManHinhController@insert_man_hinh')->name('insert_man_hinh');
        Route::post('process_insert_man_hinh','ManHinhController@process_insert_man_hinh')->name('process_insert_man_hinh');
        Route::get('update_man_hinh/{id}','ManHinhController@update_man_hinh')->name('update_man_hinh');
        Route::post('process_update_man_hinh/{id}','ManHinhController@process_update_man_hinh')->name('process_update_man_hinh');
    });

    Route::group(["prefix"=>"o_cung"], function () {
        Route::get('','OCungController@list_o_cung')->name('list_o_cung');
        Route::get('insert_o_cung','OCungController@insert_o_cung')->name('insert_o_cung');
        Route::post('process_insert_o_cung','OCungController@process_insert_o_cung')->name('process_insert_o_cung');
        Route::get('update_o_cung/{id}','OCungController@update_o_cung')->name('update_o_cung');
        Route::post('process_update_o_cung/{id}','OCungController@process_update_o_cung')->name('process_update_o_cung');
    });

    Route::group(["prefix"=>"ram"], function () {
        Route::get('','RamController@list_ram')->name('list_ram');
        Route::get('insert_ram','RamController@insert_ram')->name('insert_ram');
        Route::post('process_insert_ram','RamController@process_insert_ram')->name('process_insert_ram');
        Route::get('update_ram/{id}','RamController@update_ram')->name('update_ram');
        Route::post('process_update_ram/{id}','RamController@process_update_ram')->name('process_update_ram');
    });

    Route::group(["prefix"=>"vga"], function () {
        Route::get('','VgaController@list_vga')->name('list_vga');
        Route::get('insert_vga','VgaController@insert_vga')->name('insert_vga');
        Route::post('process_insert_vga','VgaController@process_insert_vga')->name('process_insert_vga');
        Route::get('update_vga/{id}','VgaController@update_vga')->name('update_vga');
        Route::post('process_update_vga/{id}','VgaController@process_update_vga')->name('process_update_vga');
    });

    Route::group(["prefix"=>"san_pham"], function () {
        Route::get('','SanPhamController@list_san_pham')->name('list_san_pham');
        Route::get('insert_san_pham','SanPhamController@insert_san_pham')->name('insert_san_pham');
        Route::post('process_insert_san_pham','SanPhamController@process_insert_san_pham')->name('process_insert_san_pham');
        Route::get('update_san_pham/{id}','SanPhamController@update_san_pham')->name('update_san_pham');
        Route::post('process_update_san_pham/{id}','SanPhamController@process_update_san_pham')->name('process_update_san_pham');
        Route::get('delete_san_pham/{id}','SanPhamController@delete_san_pham')->name('delete_san_pham');
    });

    Route::group(["prefix"=>"thanh_toan"], function () {
        Route::get('','ThanhToanController@list_thanh_toan')->name('list_thanh_toan');
        Route::get('insert_thanh_toan','ThanhToanController@insert_thanh_toan')->name('insert_thanh_toan');
        Route::post('process_insert_thanh_toan','ThanhToanController@process_insert_thanh_toan')->name('process_insert_thanh_toan');
        Route::get('update_thanh_toan/{id}','ThanhToanController@update_thanh_toan')->name('update_thanh_toan');
        Route::post('process_update_thanh_toan/{id}','ThanhToanController@process_update_thanh_toan')->name('process_update_thanh_toan');
        Route::get('delete_thanh_toan/{id}','ThanhToanController@delete_thanh_toan')->name('delete_thanh_toan');
    });
});

Route::group(["prefix"=>"khach_hang"], function () {
    Route::get('','KhachHangController@list_khach_hang')->name('list_khach_hang');
    Route::get('insert_khach_hang','KhachHangController@insert_khach_hang')->name('insert_khach_hang');
    Route::post('process_insert_khach_hang','KhachHangController@process_insert_khach_hang')->name('process_insert_khach_hang');
    Route::get('update_khach_hang/{id}','KhachHangController@update_khach_hang')->name('update_khach_hang');
    Route::post('process_update_khach_hang/{id}','KhachHangController@process_update_khach_hang')->name('process_update_khach_hang');
    Route::get('delete_khach_hang/{id}','KhachHangController@delete_khach_hang')->name('delete_khach_hang');
});
