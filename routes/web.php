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
Route::get("admin-sign-in", "AccountController@adminSignIn")
    ->name("adminSignIn");

Route::post("process-admin-sign-in", "AccountController@processAdminSignIn")
    ->name("processAdminSignIn");

Route::get('sign-in-or-sign-up', 'AccountController@khachHangSignInOrSignUp')->name('khachHangSignInOrSignUp');

Route::post('process-khach-hang-sign-in', 'AccountController@processKhachHangSignIn')
    ->name('processKhachHangSignIn');

Route::get('khach-hang-sign-out', 'AccountController@khachHangSignOut')
    ->name('khachHangSignOut');

Route::group(["prefix" => "khach-hang"], function () {
    Route::post('process-insert-khach-hang', 'KhachHangController@processInsertKhachHang')->name('processInsertKhachHang');
    Route::post('process-update-khach-hang/{id}', 'KhachHangController@processUpdateKhachHang')->name('processUpdateKhachHang');
});

Route::group(['prefix' => 'gio-hang'], function () {
    Route::get('', 'GioHangController@viewGioHang')->name('viewGioHang');

    Route::post('processInsertSanPhamVaoGioHang/{id}', 'GioHangController@processInsertSanPhamVaoGioHang')
        ->name('processInsertSanPhamVaoGioHang');

    Route::post('update-quantity-cart', 'GioHangController@updateQualtityCart')
        ->name('updateQualtityCart');

    Route::get('delete-san-pham-khoi-gio-hang/{rowId}', 'GioHangController@deleteSanPhamKhoiGioHang')
        ->name('deleteSanPhamKhoiGioHang');
});

Route::group(['prefix' => ''], function () {
    Route::get('', 'PageController@home')->name('home');

    Route::get('shop', 'PageController@viewShop')->name('viewShop');

    Route::get('view-san-pham-from-hang-san-xuat/{id}', 'PageController@viewSanPhamFromHangSanXuat')
        ->name('viewSanPhamFromHangSanXuat');

    Route::get('view-san-pham-from-loai-may/{id}', 'PageController@viewSanPhamFromLoaiMay')
        ->name('viewSanPhamFromLoaiMay');

    Route::get('view-chi-tiet-san-pham/{id}', 'PageController@viewChiTietSanPham')
        ->name('viewChiTietSanPham');

    Route::get('search-san-pham', 'PageController@searchSanPham')->name('searchSanPham');

    Route::get('history-hoa-don', 'PageController@historyHoaDon')->name('historyHoaDon');

    Route::get('history-hoa-don-chi-tiet/{id}', 'PageController@historyHoaDonChiTiet')
        ->name('historyHoaDonChiTiet');

    Route::get('check-out', 'PageController@checkOut')->name('checkOut');

    Route::post('process-check-out', 'HoaDonController@processCheckOut')
        ->name('processCheckOut');
});

Route::group(["prefix" => "admin", "middleware" => "CheckAdmin"], function () {
//    Route::get('', 'LayoutController@layoutAdmin');
    Route::get("", "AccountController@welcomeAdmin")->name("welcomeAdmin");
    Route::get("admin-sign-out", "AccountController@adminSignOut")->name("adminSignOut");
    Route::get('list-admin', 'AdminController@listAdmin')->name('listAdmin');
    Route::get('insert-admin', 'AdminController@insertAdmin')->name('insertAdmin');
    Route::post('process-insert-admin', 'AdminController@processInsertAdmin')->name('processInsertAdmin');
    Route::get('update-admin/{id}', 'AdminController@updateAdmin')->name('updateAdmin');
    Route::post('process-update-admin/{id}', 'AdminController@processUpdateAdmin')->name('processUpdateAdmin');
    Route::get('delete-admin/{id}', 'AdminController@deleteAdmin')->name('deleteAdmin');

    Route::group(["prefix" => "cpu"], function () {
        Route::get('', 'CpuController@listCpu')->name('listCpu');
        Route::get('insertCpu', 'CpuController@insertCpu')->name('insertCpu');
        Route::post('process-insert-cpu', 'CpuController@processInsertCpu')->name('processInsertCpu');
        Route::get('update-cpu/{id}', 'CpuController@updateCpu')->name('updateCpu');
        Route::post('process-update-cpu/{id}', 'CpuController@processUpdateCpu')->name('processUpdateCpu');
    });

    Route::group(["prefix" => "hang-san-xuat"], function () {
        Route::get('', 'HangSanXuatController@listHangSanXuat')->name('listHangSanXuat');
        Route::get('insert-hang-san-xuat', 'HangSanXuatController@insertHangSanXuat')->name('insertHangSanXuat');
        Route::post('process-insert-hang-san-xuat', 'HangSanXuatController@processInsertHangSanXuat')->name('processInsertHangSanXuat');
        Route::get('update-hang-san-xuat/{id}', 'HangSanXuatController@updateHangSanXuat')->name('updateHangSanXuat');
        Route::post('process-update-hang-san-xuat/{id}', 'HangSanXuatController@processUpdateHangSanXuat')->name('processUpdateHangSanXuat');
    });

    Route::group(["prefix" => "loai-may"], function () {
        Route::get('', 'LoaiMayController@listLoaiMay')->name('listLoaiMay');
        Route::get('insert-loai-may', 'LoaiMayController@insertLoaiMay')->name('insertLoaiMay');
        Route::post('process-insert-loai-may', 'LoaiMayController@processInsertLoaiMay')->name('processInsertLoaiMay');
        Route::get('update-loai-may/{id}', 'LoaiMayController@updateLoaiMay')->name('updateLoaiMay');
        Route::post('process-update-loai-may/{id}', 'LoaiMayController@processUpdateLoaiMay')->name('processUpdateLoaiMay');
    });

    Route::group(["prefix" => "man-hinh"], function () {
        Route::get('', 'ManHinhController@listManHinh')->name('listManHinh');
        Route::get('insert-man-hinh', 'ManHinhController@insertManHinh')->name('insertManHinh');
        Route::post('process-insert-man-hinh', 'ManHinhController@processInsertManHinh')->name('processInsertManHinh');
        Route::get('update-man-hinh/{id}', 'ManHinhController@updateManHinh')->name('updateManHinh');
        Route::post('process-update-man-hinh/{id}', 'ManHinhController@processUpdateManHinh')->name('processUpdateManHinh');
    });

    Route::group(["prefix" => "o-cung"], function () {
        Route::get('', 'OCungController@listOCung')->name('listOCung');
        Route::get('insert-o-cung', 'OCungController@insertOCung')->name('insertOCung');
        Route::post('process-insert-o-cung', 'OCungController@processInsertOCung')->name('processInsertOCung');
        Route::get('update-o-cung/{id}', 'OCungController@updateOCung')->name('updateOCung');
        Route::post('process-update-o-cung/{id}', 'OCungController@processUpdateOCung')->name('processUpdateOCung');
    });

    Route::group(["prefix" => "ram"], function () {
        Route::get('', 'RamController@listRam')->name('listRam');
        Route::get('insert-ram', 'RamController@insertRam')->name('insertRam');
        Route::post('process-insert-ram', 'RamController@processInsertRam')->name('processInsertRam');
        Route::get('update-ram/{id}', 'RamController@updateRam')->name('updateRam');
        Route::post('process-update-ram/{id}', 'RamController@processUpdateRam')->name('processUpdateRam');
    });

    Route::group(["prefix" => "vga"], function () {
        Route::get('', 'VgaController@listVga')->name('listVga');
        Route::get('insert-vga', 'VgaController@insertVga')->name('insertVga');
        Route::post('process-insert-vga', 'VgaController@processInsertVga')->name('processInsertVga');
        Route::get('update-vga/{id}', 'VgaController@updateVga')->name('updateVga');
        Route::post('process-update-vga/{id}', 'VgaController@processUpdateVga')->name('processUpdateVga');
    });

    Route::group(["prefix" => "san-pham"], function () {
        Route::get('', 'SanPhamController@listSanPham')->name('listSanPham');
        Route::get('insert-san-pham', 'SanPhamController@insertSanPham')->name('insertSanPham');
        Route::post('process-insert-san-pham', 'SanPhamController@processInsertSanPham')->name('processInsertSanPham');
        Route::get('update-san-pham/{id}', 'SanPhamController@updateSanPham')->name('updateSanPham');
        Route::post('process-update-san-pham/{id}', 'SanPhamController@processUpdateSanPham')->name('processUpdateSanPham');
        Route::get('delete-san-pham/{id}', 'SanPhamController@deleteSanPham')->name('deleteSanPham');
    });

    Route::group(["prefix" => "thanh-toan"], function () {
        Route::get('', 'ThanhToanController@listThanhToan')->name('listThanhToan');
        Route::get('insert-thanh-toan', 'ThanhToanController@insertThanhToan')->name('insertThanhToan');
        Route::post('process-insert-thanh-toan', 'ThanhToanController@processInsertThanhToan')->name('processInsertThanhToan');
        Route::get('update-thanh-toan/{id}', 'ThanhToanController@updateThanhToan')->name('updateThanhToan');
        Route::post('process-update-thanh-toan/{id}', 'ThanhToanController@processUpdateThanhToan')->name('processUpdateThanhToan');
        Route::get('delete-thanh-toan/{id}', 'ThanhToanController@deleteThanhToan')->name('deleteThanhToan');
    });

    Route::group(['prefix' => 'hoa-don'], function () {
        Route::get('', 'HoaDonController@listHoaDon')->name('listHoaDon');
        Route::get('update-hoa-don/{id}', 'HoaDonController@updateHoaDon')
            ->name('updateHoaDon');

        Route::post('process-update-hoa-don/{id}', 'HoaDonController@processUpdateHoaDon')
            ->name('processUpdateHoaDon');

        Route::get('list-hoa-don-chi-tiet/{id}', 'HoaDonController@listHoaDonChiTiet')
            ->name('listHoaDonChiTiet');
    });

    Route::group(["prefix" => "khach-hang"], function () {
        Route::get('', 'KhachHangController@listKhachHang')->name('listKhachHang');
        Route::get('update-khach-hang/{id}', 'KhachHangController@updateKhachHang')->name('updateKhachHang');
        Route::get('delete-khach-hang/{id}', 'KhachHangController@deleteKhachHang')->name('deleteKhachHang');
    });
});
