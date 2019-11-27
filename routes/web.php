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

/*Route::get('/', function () {
    return view('home');
});

Route::get('kuartal1','MainController@index');
Route::get('kuartal2','Main2Controller@index');
Route::get('kuartal3','Main3Controller@index');
Route::get('kuartal4','Main4Controller@index');
Route::get('main','MainController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('main');
*/
Route::get('kuartal1','MainController@index');
Route::get('kuartal2','Main2Controller@index');
Route::get('kuartal3','Main3Controller@index');
Route::get('beranda','HomeController@proses');
Route::get('/pilih/{id}','MainController@proses');
Route::get('/admin/tanaman','HargaController@index');
Route::get('/admin/cuaca','CuacaController@index');
Route::get('/admin/petani','PetaniController@index');
Route::get('/admin/pemilik','BosController@index');
Route::resource('bosque','BoshomeController');

Route::get('/admin/tanaman/tambah','HargaController@tambah');
Route::post('/admin/tanaman/simpan','HargaController@store');
Route::get('/admin/tanaman/edit/{id_tanam}','HargaController@edit');
Route::put('/admin/tanaman/edit/update/{id_tanam}','HargaController@update');
Route::get('/admin/tanaman/hapus/{id_tanam}','HargaController@hapus');

Route::get('/admin/cuaca/tambah','CuacaController@tambah');
Route::post('/admin/cuaca/simpan','CuacaController@store');
Route::get('/admin/cuaca/edit/{id}','CuacaController@edit');
Route::put('/admin/cuaca/edit/update/{id}','CuacaController@update');
Route::get('/admin/cuaca/hapus/{id}','CuacaController@hapus');

Route::get('/admin/petani/tambah','PetaniController@tambah');
Route::post('/admin/petani/simpan','PetaniController@store');
Route::get('/admin/petani/edit/{id}','PetaniController@edit');
Route::put('/admin/petani/edit/update/{id}','PetaniController@update');
Route::get('/admin/petani/hapus/{id}','PetaniController@hapus');

Route::get('/admin/pemilik/tambah','BosController@tambah');
Route::post('/admin/pemilik/simpan','BosController@store');
Route::get('/admin/pemilik/edit/{id}','BosController@edit');
Route::put('/admin/pemilik/edit/update/{id}','BosController@update');
Route::get('/admin/pemilik/hapus/{id}','BosController@hapus');

Route::get('/', function () {
    return view('login');
});

Route::get('/user', function () {
    return view('beranda');
});
Route::get('/admin', function () {
    return view('bos');
});
Route::get('/bos', function () {
    return view('main');
});

Route::get('/error', function () {
    return view('error');
});
Auth::routes();
Route::post('login', 'LoginController@login')->name('login');
Route::get('/login','LoginController@logout');
