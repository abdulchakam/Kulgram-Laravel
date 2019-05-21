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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('pegawai','PegawaiController');
Route::resource('siswa','SiswaController');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/siswa/hapus/{id}','SiswaController@hapus');
