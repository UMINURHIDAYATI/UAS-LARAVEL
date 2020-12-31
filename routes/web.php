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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/master', 'MasterController@master');


Route::get('/anggota', 'AnggotaController@index')->name('anggota');
Route::get('/addanggota','AnggotaController@add');
Route::post('/anggota/create','AnggotaController@create');
Route::get('/anggota/edit/{id}','AnggotaController@edit');
Route::post('/anggota/update/{id}','AnggotaController@update');
Route::get('/anggota/delete/{id}','AnggotaController@delete');

//profile
Route::get('/us', 'UsController@index');
Route::get('/adduser','UsController@add');
Route::post('/user/create','UsController@create');
Route::get('/us/edit/{id}','UsController@edit');
Route::post('update/{id}','UsController@update');

//buku
Route::get('/buku', 'BukuController@index')->name('buku');
Route::get('/addbuku','BukuController@add');
Route::post('/buku/create','BukuController@create');
Route::get('/buku/edit/{id}','BukuController@edit');
Route::post('/buku/update/{id}','BukuController@update');
Route::get('/buku/delete/{id}','BukuController@delete');


Route::get('/bukuuser','BukuController@bukuuser');

//peminjaman
Route::get('/peminjaman', 'PeminjamanController@index')->name('peminjaman');
Route::resource('peminjaman', 'PeminjamanController');
Route::get('/addpeminjaman','PeminjamanController@create');
Route::post('/store','PeminjamanController@store');
Route::get('/editpeminjaman/{id}','PeminjamanController@edit');
Route::post('/peminjaman/update/{id}','PeminjamanController@update');
Route::get('/peminjaman/delete/{id}','PeminjamanController@delete');


//pengembalian
Route::get('/pngembalian', 'PengembalianController@index')->name('pengembalian');
Route::resource('pengembalian', 'PengembalianController');
Route::get('/editpengembalian/{id}','PengembalianController@edit');
Route::post('/pengembalian/update/{id}','PengembalianController@update');
Route::get('/pengembalian/delete/{id}','PengembalianController@delete');
Route::get('app/http/controllers/pengembalian/cetak_pdfpengembalian', 'LaporanController@cetak_pdfpengembalian');


//laporan
Route::get('/laporan', 'LaporanController@index');
Route::resource('/laporan','LaporanController');
Route::get('/anggota/cetak_pdfanggota', 'LaporanController@cetak_pdfanggota');
Route::get('/buku/cetak_pdfbuku', 'LaporanController@cetak_pdfbuku');
Route::get('/transaksi/cetak_pdftransaksi', 'TransaksiController@cetak_pdftransaksi');

// Route::get('/pengembalian/cetak_pdf', 'PengambalianController@cetak_pdf');
// Route::get('/buku/cetak_pdf', 'LaporanController@cetak_pdf');

//dashboard
Route::get('/home', 'DashboardController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

