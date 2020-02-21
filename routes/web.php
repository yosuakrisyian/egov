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
    Route::post('/adminizinstudil/inputizinstudilanjut', 'AdminIzinstudilanjutController@store')->name('inputadminizinstudilanjut');
    Route::get('/adminizinstudil/formeditadmin/{nik}', 'AdminIzinstudilanjutController@show')->name('formeditadminizinstudilanjut');
    Route::post('/adminizinstudil/updateadmin/{nik}', 'AdminIzinstudilanjutController@update')->name('updateadminizinstudilanjut');
    Route::get('/adminizinstudil/deleteadmin/{nik}', 'AdminIzinstudilanjutController@destroy')->name('deleteadminizinstudilanjut');

    // route admin izin cuti
    Route::get('/adminizincuti', 'AdminIzincutiController@index')->name('homeAdminIzincuti');
    Route::post('/adminizincuti/inputadminizincuti', 'AdminIzincutiController@store')->name('inputadminizincuti');
    Route::get('/adminizincuti/formeditadmin/{nik}', 'AdminIzincutiController@show')->name('formeditadminizincuti');
    Route::post('/adminizincuti/updateadmin/{nik}', 'AdminIzincutiController@update')->name('updateadminizincuti');
    Route::get('/adminizincuti/deleteadmin/{nik}', 'AdminIzincutiController@destroy')->name('deleteadminizincuti');

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
    Route::post('/adminkenaikanpangkat/inputkenaikanpangkat', 'AdminKenaikanpangkatController@store')->name('inputadminkenaikanpangkat');
    Route::get('/adminkenaikanpangkat/formeditadmin/{nik}', 'AdminKenaikanpangkatController@show')->name('formeditadminkenaikanpangkat');
    Route::post('/adminkenaikanpangkat/updateadmin/{nik}', 'AdminKenaikanpangkatController@update')->name('updateadminkenaikanpangkat');
    Route::get('/adminkenaikanpangkat/deleteadmin/{nik}', 'AdminKenaikanpangkatController@destroy')->name('deleteadminkenaikanpangkat');

    // route admin kenaikan gaji
    Route::get('/adminkenaikangaji', 'AdminKenaikangajiController@index')->name('homeAdminKenaikangaji');
    Route::post('/adminkenaikangaji/inputadminkenaikangaji', 'AdminKenaikangajiController@store')->name('inputadminkenaikangaji');
    Route::get('/adminkenaikangaji/formedit/{nik}', 'AdminKenaikangajiController@show')->name('formeditadminkenaikangaji');
    Route::post('/adminkenaikangaji/update/{nik}', 'AdminKenaikangajiController@update')->name('updateadminkenaikangaji');
    Route::get('/adminkenaikangaji/delete/{nik}', 'AdminKenaikangajiController@destroy')->name('deleteadminkenaikangaji');
    
    
});

// route jalurnya pegawai
Route::group(['middleware' => ['auth','ceklevel:2']], function(){
    Route::get('/user/pegawai', 'PegawaiController@index')->name('homePegawai');

    // route pegawai izin studi lanjut
    Route::get('/pegawaiizinstudilanjut', 'PegawaiIzinstudilanjutController@index')->name('homePegawaiIzinstudilanjut');
    // Route::post('/pegawaiizinstudilanjut/inputpegawaiizinstudilanjut', 'PegawaiIzinstudilanjutController@store')->name('inputpegawaiizinstudilanjut');
    // Route::get('/pegawaiizinstudilanjut/formeditpegawai/{nik}', 'PegawaiIzinstudilanjutController@show')->name('formeditpegawaiizinstudilanjut');
    // Route::post('/pegawaiizinstudilanjut/updatepegawai/{nik}', 'PegawaiIzinstudilanjutController@update')->name('updatepegawaiizinstudilanjut');
    // Route::get('/pegawaiizinstudilanjut/deletepegawai/{nik}', 'PegawaiIzinstudilanjutController@destroy')->name('deletepegawaiizinstudilanjut');

    // route pegawai izin cuti
    Route::get('/pegawaiizincuti', 'PegawaiIzincutiController@index')->name('homePegawaiIzincuti');
    Route::post('/pegawaiizincuti/inputpegawaiizincuti', 'PegawaiIzincutiController@store')->name('inputpegawaiizincuti');
    Route::get('/pegawaiizincuti/formeditpegawai/{nik}', 'PegawaiIzincutiController@show')->name('formeditpegawaiizincuti');
    Route::post('/pegawaiizincuti/updatepegawai/{nik}', 'PegawaiIzincutiController@update')->name('updatepegawaiizincuti');
    Route::get('/pegawaiizincuti/deletepegawai/{nik}', 'PegawaiIzincutiController@destroy')->name('deletepegawaiizincuti');

    // route pegawai kenaikan pangkat
    Route::get('/pegawaikenaikanpangkat', 'PegawaiKenaikanpangkatController@index')->name('homePegawaiKenaikanpangkat');
    Route::post('/pegawaikenaikanpangkat/inputpegawaikenaikanpangkat', 'PegawaiKenaikanpangkatController@store')->name('inputpegawaikenaikanpangkat');
    Route::get('/pegawaikenaikanpangkat/formedit/{nik}', 'PegawaiKenaikanpangkatController@show')->name('formeditpegawaikenaikanpangkat');
    Route::post('/pegawaikenaikanpangkat/update/{nik}', 'PegawaiKenaikanpangkatController@update')->name('updatepegawaikenaikanpangkat');
    Route::get('/pegawaikenaikanpangkat/delete/{nik}', 'PegawaiKenaikanpangkatController@destroy')->name('deletepegawaikenaikanpangkat');

    // route pegawai kenaikan gaji
    Route::get('/pegawaikenaikangaji', 'PegawaiKenaikangajiController@index')->name('homePegawaiKenaikangaji');
    Route::post('/pegawaikenaikangaji/inputpegawaikenaikangaji', 'PegawaiKenaikangajiController@store')->name('inputpegawaikenaikangaji');
    Route::get('/pegawaikenaikangaji/formedit/{nik}', 'PegawaiKenaikangajiController@show')->name('formeditpegawaikenaikangaji');
    Route::post('/pegawaikenaikangaji/update/{nik}', 'PegawaiKenaikangajiController@update')->name('updatepegawaikenaikangaji');
    Route::get('/pegawaikenaikangaji/delete/{nik}', 'PegawaiKenaikangajiController@destroy')->name('deletepegawaikenaikangaji');

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
    Route::get('/pegawaidataperilakukerja', 'PegawaiPerilakukerjaController@index')->name('homePegawaiPerilakukerja');
    Route::post('/pegawaidataperilakukerja/inputperilakukerja', 'PegawaiPerilakukerjaController@store')->name('inputperilakukerja');
    Route::get('/pegawaidataperilakukerja/delete/{nik}', 'PegawaiPerilakukerjaController@destroy')->name('deleteperilakukerja');

    // izin studi
    Route::post('/pegawaiizinstudilanjut/inputpegawaiizinstudilanjut', 'PegawaiIzinstudilanjutController@store')->name('inputpegawaiizinstudilanjut');
    Route::get('/pegawaiizinstudilanjut/formeditpegawaipegawaiizinstudilanjut/{nik}', 'PegawaiIzinstudilanjutController@show')->name('formeditpegawaiizinstudilanjut');
    Route::post('/pegawaiizinstudilanjut/updatepegawai/{nik}', 'PegawaiIzinstudilanjutController@update')->name('updatepegawaiizinstudilanjut');
    Route::get('/pegawaiizinstudilanjut/deletepegawai/{nik}', 'PegawaiIzinstudilanjutController@destroy')->name('deletepegawaiizinstudilanjut');

    //surat
    Route::get('/pegawaisurat', 'PegawaiSuratController@index')->name('PegawaiSurat');
    Route::post('/pegawaisurat/inputpegawaisurat', 'PegawaiSuratController@store')->name('inputpegawaisurat');
    Route::get('/pegawaisurat/formeditpegawaisurat/{nik}', 'PegawaiSuratController@show')->name('formeditpegawaisurat');
    Route::post('/pegawaisurat/updatepegawaisurat/{nik}', 'PegawaiSuratController@update')->name('updatepegawaisurat');
    Route::get('/pegawaisurat/deletepegawaisurat/{nik}', 'PegawaiSuratController@destroy')->name('deletepegawaisurat');
    Route::get('/pegawaisurat/lihatsurat/{nik}', 'PegawaiSuratController@lihat')->name('viewsurat');

});
