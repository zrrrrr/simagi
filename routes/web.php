<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', 'AdminController@index');

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
Route::post('dataPeralatanGI', 'AdminController@store_data_peralatan');
Route::post('dataTagNamaAlat', 'AdminController@store_data_tagnama_alat');
Route::post('dataNamaGardu', 'AdminController@store_data_nama_gardu');
Route::post('dataKategoriPeralatan', 'AdminController@store_data_kategori_peralatan');
Route::post('dataMerkAlat', 'AdminController@store_data_merk_alat');
Route::post('updateUser', 'AdminController@update');