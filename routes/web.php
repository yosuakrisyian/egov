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

// route admin atasan
Route::get('/adminatasan', 'AdminAtasanController@index')->name('homeAdminAtasan');

// route admin golongan
Route::get('/admingolongan', 'AdminGolonganController@index')->name('homeAdminGolongan');

// route admin pegawai
Route::get('/adminpegawai', 'AdminPegawaiController@index')->name('homeAdminPegawai');

// route admin izin studi lanjut
Route::get('/adminizinstudilanjut', 'AdminIzinstudilanjutController@index')->name('homeAdminIzinstudilanjut');

// route admin izin cuti
Route::get('/adminizincuti', 'AdminIzincutiController@index')->name('homeAdminIzincuti');

// route admin kenaikan pangkatg
Route::get('/adminkenaikanpangkat', 'AdminKenaikanpangkatController@index')->name('homeAdminKenaikanpangkat');

// route admin kenaikan gaji
Route::get('/adminkenaikangaji', 'AdminKenaikangajiController@index')->name('homeAdminKenaikangaji');

// route admin kenaikan gaji
Route::get('/adminperilakukerja', 'AdminPerilakukerjaController@index')->name('homeAdminPerilakukerja');
