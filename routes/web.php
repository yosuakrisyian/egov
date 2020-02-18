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

// route punya admin -> level 1
Route::group(['middleware' => ['auth','ceklevel:1']], function(){
    Route::get('/home', 'HomeController@index')->name('home');

    // route admin atasan
    Route::get('/adminatasan', 'AdminAtasanController@index')->name('homeAdminAtasan');

    // route admin golongan
    Route::get('/admingolongan', 'AdminGolonganController@index')->name('homeAdminGolongan');

    // route admin pegawai
    Route::get('/adminpegawai', 'AdminPegawaiController@index')->name('homeAdminPegawai');
    Route::post('/adminpegawai/inputpegawai', 'AdminPegawaiController@store')->name('inputpegawai');
    Route::get('/adminpegawai/formedit/{nik}', 'AdminPegawaiController@show')->name('formeditpegawai');
    Route::post('/adminpegawai/update/{nik}', 'AdminPegawaiController@update')->name('updatepegawai');
    Route::get('/adminpegawai/delete/{nik}', 'AdminPegawaiController@destroy')->name('deletepegawai');

    // route admin izin studi lanjut
    Route::get('/adminizinstudilanjut', 'AdminIzinstudilanjutController@index')->name('homeAdminIzinstudilanjut');

    // route admin izin cuti
    Route::get('/adminizincuti', 'AdminIzincutiController@index')->name('homeAdminIzincuti');

    // route admin perilaku kerja
    Route::get('/adminperilakukerja', 'AdminPerilakukerjaController@index')->name('homeAdminPerilakukerja');

    // route admin target skp
    Route::get('/targetskp', 'AdminTargetSkpController@index')->name('targetSkp');
    Route::get('/targetskp/forminput', 'AdminTargetSkpController@create')->name('forminputskp');

    // route admin realisasi skp
    Route::get('/adminrealisasiskp', 'AdminRealisasiSkpController@index')->name('homeAdminRealisasiSkp');
});

Route::group(['middleware' => ['auth','ceklevel:2']], function(){
    // Route::get('/adminpegawai', 'AdminPegawaiController@index')->name('homeAdminPegawai');
});
// route admin kenaikan pangkatg
Route::get('/adminkenaikanpangkat', 'AdminKenaikanpangkatController@index')->name('homeAdminKenaikanpangkat');

// route admin kenaikan gaji
Route::get('/adminkenaikangaji', 'AdminKenaikangajiController@index')->name('homeAdminKenaikangaji');

// route admin kenaikan gaji
Route::get('/adminperilakukerja', 'AdminPerilakukerjaController@index')->name('homeAdminPerilakukerja');
