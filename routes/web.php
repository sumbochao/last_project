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
Route::get('menu', 'Controller@layout_menu');

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

    Route::group(["prefix"=>"cau_hinh"], function () {
        Route::get('','CauHinhController@list_cau_hinh')->name('list_cau_hinh');
        Route::get('insert_cau_hinh','CauHinhController@insert_cau_hinh')->name('insert_cau_hinh');
        Route::post('process_insert_cau_hinh','CauHinhController@process_insert_cau_hinh')->name('process_insert_cau_hinh');
        Route::get('update_cau_hinh/{id}','CauHinhController@update_cau_hinh')->name('update_cau_hinh');
        Route::post('process_update_cau_hinh/{id}','CauHinhController@process_update_cau_hinh')->name('process_update_cau_hinh');
    });

    Route::group(["prefix"=>"thuong_hieu"], function () {
        Route::get('','ThuongHieuController@list_thuong_hieu')->name('list_thuong_hieu');
        Route::get('insert_thuong_hieu','ThuongHieuController@insert_thuong_hieu')->name('insert_thuong_hieu');
        Route::post('process_insert_thuong_hieu','ThuongHieuController@process_insert_thuong_hieu')->name('process_insert_thuong_hieu');
        Route::get('update_thuong_hieu/{id}','ThuongHieuController@update_thuong_hieu')->name('update_thuong_hieu');
        Route::post('process_update_thuong_hieu/{id}','ThuongHieuController@process_update_thuong_hieu')->name('process_update_thuong_hieu');
    });

    Route::group(["prefix"=>"san_pham"], function () {
        Route::get('','SanPhamController@list_san_pham')->name('list_san_pham');
        Route::get('insert_san_pham','SanPhamController@insert_san_pham')->name('insert_san_pham');
        Route::post('process_insert_san_pham','SanPhamController@process_insert_san_pham')->name('process_insert_san_pham');
        Route::get('update_san_pham/{id}','SanPhamController@update_san_pham')->name('update_san_pham');
        Route::post('process_update_san_pham/{id}','SanPhamController@process_update_san_pham')->name('process_update_san_pham');
        Route::get('delete_san_pham/{id}','SanPhamController@delete_san_pham')->name('delete_san_pham');
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
