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
use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web'); //kalau sudah konek model, tidak bisa dipakai
});
//ulangi cara diatas untuk tugas 4
Route::get('tugas4', function(){
    return view('tugas4web');
});

Route::get('praktikum2', 'ViewController@showPraktikum2');
//ulangi cara ini untuk link ETS dan Tugas PHP
//2 versi = ada yang 2 file, ada yang 1 file
//bagi yang 2 file, harus membuat 2 route identified
Route::get('ets', 'ViewController@showets');

Route::get('php', 'ViewController@showphp');

Route::post('materi', 'ViewController@showmateri');

//route CRUD
Route::get('/pegawai', 'PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pendapatan','PendapatanController@index');

Route::get('/pendapatan/tambah','PendapatanController@tambah');

Route::post('/pendapatan/store','PendapatanController@store');

Route::get('/pendapatan/edit/{id}','PendapatanController@edit');

Route::post('/pendapatan/update','PendapatanController@update');

Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

