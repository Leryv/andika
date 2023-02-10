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
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', ['App\Http\Controllers\HomeController','index'])->name('home');
Route::get('/satuan','SatuanController@index')->name('satuan');
Route::get('/satuan/edit', 'SatuanController@edit')->name('satuan.edit');


Route::resource('users', 'UserController');
Route::get('barang', 'MasterBarang\BarangController@index')->name('barang');
Route::get('barang/create', 'MasterBarang\BarangController@create')->name('barang.create');
Route::get('barang/mintastock', 'MasterBarang\BarangController@mintastock')->name('barang.request');
// Route::resource('barang', 'MasterBarang\BarangController');
// Route::resource('stock', 'StockController');
// Route::resource('satuan', 'SatuanController');
// Route::resource('satuan', 'MasterData\SatuanController@satuan');
// Route::resource('kategori', 'KategoriController');
// Route::resource('brand', 'BrandController');
Route::get('brand', 'MasterData\BrandController@index')->name('brand');
Route::get('brand/brand', 'MasterData\BrandController@brand')->name('brand.brand');
Route::get('brand/kategori', 'MasterData\BrandController@kategori')->name('brand.kategori');
Route::get('brand/satuan', 'MasterData\BrandController@satuan')->name('brand.satuan');
// Route::get('brand/edit', 'MasterData\BrandController@edit');
Route::get('transaksi/in', 'MasterData\TransaksiController@in');
Route::get('transaksi/out', 'MasterData\TransaksiController@out');