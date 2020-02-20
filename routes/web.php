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
    return view('auth.login');
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
    Route::get('/admintargetskp', 'AdminTargetSkpController@index')->name('homeAdmintargetskp');
    Route::post('/admintargetskp/inputtargetskp', 'AdminTargetSkpController@store')->name('inputtargetskp');
    Route::get('/admintargetskp/formedit/{nik}', 'AdminTargetSkpController@show')->name('formedittargetskp');
    Route::post('/admintargetskp/update/{nik}', 'AdminTargetSkpController@update')->name('updatetargetskp');
    Route::get('/admintargetskp/delete/{nik}', 'AdminTargetSkpController@destroy')->name('deletetargetskp');

    // route admin realisasi skp
    Route::get('/adminrealisasiskp', 'AdminRealisasiSkpController@index')->name('homeAdminRealisasiSkp');
    Route::post('/adminrealisasiskp/inputrealisasiskp', 'AdminRealisasiSkpController@store')->name('inputrealisasiskp');
    Route::get('/adminrealisasiskp/formedit/{nik}', 'AdminRealisasiSkpController@show')->name('formeditrealisasiskp');
    Route::post('/adminrealisasiskp/update/{nik}', 'AdminRealisasiSkpController@update')->name('updaterealisasiskp');
    Route::get('/adminrealisasiskp/delete/{nik}', 'AdminRealisasiSkpController@destroy')->name('deleterealisasiskp');

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
});

// route jalurnya pegawai
Route::group(['middleware' => ['auth','ceklevel:2']], function(){
    Route::get('/user/pegawai', 'PegawaiController@index')->name('homePegawai');

    // route pegawai izin studi lanjut pegawai
    Route::get('/pegawaiizinstudilanjut', 'PegawaiIzinstudilanjutController@index')->name('homePegawaiIzinstudilanjut');
    Route::post('/pegawaiizinstudilanjut/inputizinstudilanjut', 'PegawaiIzinstudilanjutController@store')->name('inputizinstudilanjut');
    Route::get('/pegawaiizinstudilanjut/formedit/{nik}', 'PegawaiIzinstudilanjutController@show')->name('formeditizinstudilanjut');
    Route::post('/pegawaiizinstudilanjut/update/{nik}', 'PegawaiIzinstudilanjutController@update')->name('updateizinstudilanjut');
    Route::get('/pegawaiizinstudilanjut/delete/{nik}', 'PegawaiIzinstudilanjutController@destroy')->name('deleteizinstudilanjut');

    // route pegawai target skp
    Route::get('/pegawaitargetskp', 'PegawaiTargetSkpController@index')->name('homePegawaitargetskp');
    Route::post('/pegawaitargetskp/inputtargetskp', 'PegawaiTargetSkpController@store')->name('inputtargetskp');
    Route::get('/pegawaitargetskp/formedit/{nik}', 'PegawaiTargetSkpController@show')->name('formedittargetskp');
    Route::post('/pegawaitargetskp/update/{nik}', 'PegawaiTargetSkpController@update')->name('updatetargetskp');
    Route::get('/pegawaitargetskp/delete/{nik}', 'PegawaiTargetSkpController@destroy')->name('deletetargetskp');

    // route pegawai perilaku kerja
    Route::get('/pegawaiperilakukerja', 'PegawaiPerilakukerjaController@index')->name('homePegawaiPerilakukerja');
    Route::post('/pegawaiperilakukerja/inputperilakukerja', 'PegawaiPerilakukerjaController@store')->name('inputperilakukerja');
    Route::get('/pegawaiperilakukerja/delete/{nik}', 'PegawaiPerilakukerjaController@destroy')->name('deleteperilakukerja');

    // route pegawai data perilaku kerja
    Route::get('/pegawaidataperilakukerja', 'PegawaiDataPerilakukerjaController@index')->name('homeDataPegawaiPerilakukerja');
});
