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

Route::resource('users', 'UserController');
Route::group(['prefix'=>'barang'], function(){
    Route::get('', 'MasterBarang\BarangController@index')->name('barang');
    Route::get('/create', 'MasterBarang\BarangController@create')->name('barang.create');
    Route::get('/edit', 'MasterBarang\BarangController@edit')->name('barang.edit');
    Route::get('/requeststock', 'MasterBarang\BarangController@mintastock')->name('barang.request.stock');
    Route::get('/show', 'MasterBarang\BarangController@show')->name('barang.show');
});


// Route Master Data
Route::group(['prefix'=>'kategori'], function(){
    Route::get('', 'MasterData\KategoriController@index')->name('kategori');
});

Route::group(['prefix'=>'brand'], function(){
    Route::get('', 'MasterData\BrandController@index')->name('brand');
});

Route::group(['prefix'=>'satuan'], function(){
    Route::get('', 'MasterData\SatuanController@index')->name('satuan');
});

// Route::match(['get', 'post'], '/', function () {
    //     //
    // });

// Route Transaksi
Route::group(['prefix'=>'transaksi'], function(){
    Route::get('in', 'MasterData\TransaksiController@in');
    Route::get('out', 'MasterData\TransaksiController@out');
});
