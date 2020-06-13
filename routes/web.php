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

Route::group(["prefix" => "admin"], function () {
    Route::get('', 'Controller@layer_admin');
    Route::get('list_admin', 'AdminController@list_admin')->name('list_admin');
    Route::get('insert_admin','AdminController@insert_admin')->name('insert_admin');
    Route::post('process_insert_admin','AdminController@process_insert_admin')->name('process_insert_admin');
    Route::get('update_admin/{id}','AdminController@update_admin')->name('update_admin');
    Route::post('process_update_admin/{id}','AdminController@process_update_admin')->name('process_update_admin');
    Route::get('delete_admin/{id}','AdminController@delete_admin')->name('delete_admin');
});

Route::group(["prefix"=>"cau_hinh"], function () {
    Route::get('list_cau_hinh','CauHinhController@list_cau_hinh')->name('list_cau_hinh');
    Route::get('insert_cau_hinh','CauHinhController@insert_cau_hinh')->name('insert_cau_hinh');
    Route::post('process_insert_cau_hinh','CauHinhController@process_insert_cau_hinh')->name('process_insert_cau_hinh');
    Route::get('update_cau_hinh/{id}','CauHinhController@update_cau_hinh')->name('update_cau_hinh');
    Route::post('process_update_cau_hinh/{id}','CauHinhController@process_update_cau_hinh')->name('process_update_cau_hinh');
    Route::get('delete_cau_hinh/{id}','AdminController@delete_cau_hinh')->name('delete_cau_hinh');
});
