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
    Route::post('/admingolongan/inputgolongan', 'AdminGolonganController@store')->name('inputgolongan');
    Route::get('/admingolongan/formedit/{nik}', 'AdminGolonganController@show')->name('formeditgolongan');
    Route::post('/admingolongan/update/{nik}', 'AdminGolonganController@update')->name('updategolongan');
    Route::get('/admingolongan/delete/{nik}', 'AdminGolonganController@destroy')->name('deletegolongan');

    // route admin pegawai
    Route::get('/adminpegawai', 'AdminPegawaiController@index')->name('homeAdminPegawai');
    Route::post('/adminpegawai/inputpegawai', 'AdminPegawaiController@store')->name('inputpegawai');
    Route::get('/adminpegawai/formedit/{nik}', 'AdminPegawaiController@show')->name('formeditpegawai');
    Route::post('/adminpegawai/update/{nik}', 'AdminPegawaiController@update')->name('updatepegawai');
    Route::get('/adminpegawai/delete/{nik}', 'AdminPegawaiController@destroy')->name('deletepegawai');

    // route admin izin studi lanjut
    Route::get('/adminizinstudilanjut', 'AdminIzinstudilanjutController@index')->name('homeAdminIzinstudilanjut');
    Route::post('/adminizinstudilanjut/inputizinstudilanjut', 'AdminIzinstudilanjutController@store')->name('inputizinstudilanjut');
    Route::get('/adminizinstudilanjut/formedit/{nik}', 'AdminIzinstudilanjutController@show')->name('formeditizinstudilanjut');
    Route::post('/adminizinstudilanjut/update/{nik}', 'AdminIzinstudilanjutController@update')->name('updateizinstudilanjut');
    Route::get('/adminizinstudilanjut/delete/{nik}', 'AdminIzinstudilanjutController@destroy')->name('deleteizinstudilanjut');

    // route admin izin cuti
    Route::get('/adminizincuti', 'AdminIzincutiController@index')->name('homeAdminIzincuti');
    Route::post('/adminizincuti/inputizincuti', 'AdminIzincutiController@store')->name('inputizincuti');
    Route::get('/adminizincuti/formedit/{nik}', 'AdminIzincutiController@show')->name('formeditizincuti');
    Route::post('/adminizincuti/update/{nik}', 'AdminIzincutiController@update')->name('updateizincuti');
    Route::get('/adminizincuti/delete/{nik}', 'AdminIzincutiController@destroy')->name('deleteizincuti');

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
// route admin kenaikan pangkat
Route::get('/adminkenaikanpangkat', 'AdminKenaikanpangkatController@index')->name('homeAdminKenaikanpangkat');
Route::post('/adminkenaikanpangkat/inputkenaikanpangkat', 'AdminKenaikanpangkatController@store')->name('inputkenaikanpangkat');
Route::get('/adminkenaikanpangkat/formedit/{nik}', 'AdminKenaikanpangkatController@show')->name('formeditkenaikanpangkat');
Route::post('/adminkenaikanpangkat/update/{nik}', 'AdminKenaikanpangkatController@update')->name('updatekenaikanpangkat');
Route::get('/adminkenaikanpangkat/delete/{nik}', 'AdminKenaikanpangkatController@destroy')->name('deletekenaikanpangkat');

// route admin kenaikan gaji
Route::get('/adminkenaikangaji', 'AdminKenaikangajiController@index')->name('homeAdminKenaikangaji');
Route::post('/adminkenaikangaji/inputkenaikangaji', 'AdminKenaikangajiController@store')->name('inputkenaikangaji');
Route::get('/adminkenaikangaji/formedit/{nik}', 'AdminKenaikangajiController@show')->name('formeditkenaikangaji');
Route::post('/adminkenaikangaji/update/{nik}', 'AdminKenaikangajiController@update')->name('updatekenaikangaji');
Route::get('/adminkenaikangaji/delete/{nik}', 'AdminKenaikangajiController@destroy')->name('deletekenaikangaji');


