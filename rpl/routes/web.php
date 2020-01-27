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

// Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');


Route::get('/', 'UtamaController@index')->name('utama');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Data dokter
Route::get('/dokter', 'DokterController@index');
Route::get('/dokter/tambah', 'DokterController@create');
Route::post('/dokter/tambah/save', 'DokterController@store');
Route::get('/dokter/edit/{dk_id}', 'DokterController@edit');
Route::patch('/dokter/edit/{dk_id}/save', 'DokterController@update');
Route::delete('/dokter/delete/{dk_id}', 'DokterController@destroy');


Route::get('/user', 'GuruController@index');
Route::get('/user/tambah', 'GuruController@create');
Route::post('/user/tambah/save', 'GuruController@store');
Route::get('/dokter/edit/{dk_id}', 'DokterController@edit');
Route::patch('/dokter/edit/{dk_id}/save', 'DokterController@update');
Route::delete('/dokter/delete/{dk_id}', 'DokterController@destroy');





//uasrpl

//data pembayaran
Route::get('/pembayaran', 'PembayaranController@index');
Route::get('/pembayaran/tambah', 'PembayaranController@create');
Route::post('/pembayaran/tambah/save', 'PembayaranController@store');
Route::get('/pembayaran/edit/{id}', 'PembayaranController@edit');
Route::patch('/pembayaran/edit/{id}/save', 'PembayaranController@update');
Route::delete('/pembayaran/delete/{id}', 'PembayaranController@destroy');
//data verifikasi pembayaran
Route::get('/verifikasi/save/{id}','PembayaranController@verified');


Route::get('/berkas', 'BerkasController@index');
Route::get('/berkas/tambah', 'BerkasController@create');
Route::get('/pendaftaran', 'PendaftaranController@index');
Route::get('/pendaftaran/tambah', 'PendaftaranController@create');
Route::get('/pendaftaran/detail/{id}', 'PendaftaranController@detail');
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/tambah', 'SiswaController@create');
Route::get('/siswa/detail/{id}', 'SiswaController@detail');

//data edit profil
Route::get('/editprofil/edit/{id}', 'EditprofilController@index');
Route::post('/editprofil/password/{id}/save', 'EditprofilController@ubah_password');
Route::patch('/editprofil/edit/{id}/save', 'EditprofilController@update');

//data verifikasi 
Route::get('/ubah_status/save/{id}','PendaftaranController@verified');



//data informasi 
Route::get('/informasi', 'InformasiController@index');
Route::get('/informasi/tambah', 'InformasiController@create');
Route::post('/informasi/tambah/save', 'InformasiController@store');
Route::get('/informasi/edit/{id}', 'InformasiController@edit');
Route::patch('/informasi/edit/{id}/save', 'InformasiController@update');
Route::delete('/informasi/delete/{id}', 'InformasiController@destroy');

//data 
Route::get('/pengumuman', 'UtamaController@pengumuman');
Route::get('/sambutan', 'UtamaController@sambutan');
Route::get('/profil_sekolah', 'UtamaController@sambutan');
Route::get('/visi_misi', 'UtamaController@visi_misi');
Route::get('/prestasi', 'UtamaController@prestasi');
Route::get('/galeri', 'UtamaController@galeri');
Route::get('/aktifitas', 'UtamaController@aktivitas');
Route::get('/fasilitas', 'UtamaController@fasilitas');