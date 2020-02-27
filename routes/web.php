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
    Route::post('/admintargetskp/admininputtargetskp', 'AdminTargetSkpController@store')->name('admininputtargetskp');
    Route::get('/admintargetskp/adminformedit/{nik}', 'AdminTargetSkpController@show')->name('adminformedittargetskp');
    Route::post('/admintargetskp/adminupdate/{nik}', 'AdminTargetSkpController@update')->name('adminupdatetargetskp');
    Route::get('/admintargetskp/admindelete/{nik}', 'AdminTargetSkpController@destroy')->name('admindeletetargetskp');

    // route admin realisasi skp
    Route::get('/adminrealisasiskp', 'AdminRealisasiSkpController@index')->name('homeAdminRealisasiSkp');
    Route::post('/adminrealisasiskp/admininputrealisasiskp', 'AdminRealisasiSkpController@store')->name('admininputrealisasiskp');
    Route::get('/adminrealisasiskp/adminformedit/{nik}', 'AdminRealisasiSkpController@show')->name('adminformeditrealisasiskp');
    Route::post('/adminrealisasiskp/adminupdate/{nik}', 'AdminRealisasiSkpController@update')->name('adminupdaterealisasiskp');
    Route::get('/adminrealisasiskp/admindelete/{nik}', 'AdminRealisasiSkpController@destroy')->name('admindeleterealisasiskp');

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

    //  route pegawai target skp
    Route::get('/pegawaitargetskp', 'PegawaiTargetSkpController@index')->name('homePegawaitargetskp');
    Route::post('/pegawaitargetskp/pegawaiinputtargetskp', 'PegawaiTargetSkpController@store')->name('pegawaiinputtargetskp');
    Route::get('/pegawaitargetskp/pegawaiformedit/{nik}', 'PegawaiTargetSkpController@show')->name('pegawaiformedittargetskp');
    Route::post('/pegawaitargetskp/pegawaiupdate/{nik}', 'PegawaiTargetSkpController@update')->name('pegawaiupdatetargetskp');
    Route::get('/pegawaitargetskp/pegawaidelete/{nik}', 'PegawaiTargetSkpController@destroy')->name('pegawaideletetargetskp');

    // route pegawai perilaku kerja
    Route::get('/pegawaiperilakukerja', 'PegawaiPerilakukerjaController@index')->name('homePegawaiPerilakukerja');
    Route::post('/pegawaiperilakukerja/inputperilakukerja/{nik}', 'PegawaiPerilakukerjaController@store')->name('inputperilakukerja');
    

    // route pegawai data perilaku kerja
    Route::get('/pegawaidataperilakukerja', 'PegawaiDataPerilakukerjaController@index')->name('homeDataPegawaiPerilakukerja');
    Route::get('/pegawaidataperilakukerja/inputdataperilakukerja/{nik}', 'PegawaiDataPerilakukerjaController@show')->name('inputdataperilakukerja');
   
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

    // route pegawai lihat skp
    Route::get('/pegawailihatskp', 'PegawaiLihatSkpController@index')->name('homePegawailihatskp');
    Route::post('/pegawailihatskp/bytahun', 'PegawaiLihatSkpController@show')->name('showPegawailihatskp');

    //slip tpp
    Route::get('/pegawaisliptpp', 'PegawaiSliptppController@index')->name('homePegawaiSlip');
    Route::get('/pegawaisliptpp/lihatsliptpp/{nik}', 'PegawaiSliptppController@lihat')->name('lihatsliptpp');

});


// route jalurnya penilai
Route::group(['middleware' => ['auth','ceklevel:3']], function(){
    Route::get('/user/penilai', 'PenilaiController@index')->name('homePenilai');

    // route penilai hitung tpp
    Route::get('/penilaihitungtpp', 'PenilaiHitungtppController@index')->name('homePenilaiDatatpp');
    Route::get('/penilaihitungtpp/inputhitungtpp/{nik}', 'PenilaiHitungtppController@show')->name('inputhitungtpp');
    //Route::get('/penilaihitungtpp/delete/{nik}', 'PenilaiHitungtppController@destroy')->name('deleteperilakukerja');

    // route lanjut hitung tpp
    Route::post('/penilailanjuthitungtpp/inputlanjuthitungtpp/{nik}', 'PenilaiLanjutHitungtppController@show')->name('inputlanjuthitungtpp');

    // route hasil hitung tpp
    Route::post('/penilaihasilhitungtpp/inputhasilhitungtpp/{nik}', 'PenilaiHitungtppHasilController@store')->name('inputhasilhitungtpp');

    // route penilai lihat hasil tpp
    Route::get('/penilailihathasiltpp', 'PenilaiLihatHasiltppController@index')->name('homePenilaiLihattpp');

    // route penilai realisasi skp
    Route::get('/penilairealisasiskp', 'PenilaiRealisasiSkpController@index')->name('homePenilaiRealisasiSkp');
    Route::post('/penilairealisasiskp/inputrealisasiskp', 'PenilaiRealisasiSkpController@store')->name('inputrealisasiskp');
    

    // route penilai data realisasi skp
    Route::get('/penilaidatarealisasiskp', 'PenilaiDataRealisasiSkpController@index')->name('homeDataPenilaiRealisasiSkp');
    Route::get('/penilaidatarealisasiskp/inputdatarealisasiskp/{nik}', 'PenilaiDataRealisasiSkpController@show')->name('inputdatarealisasiskp');

    // route lihat perilaku kerja
    Route::get('/penilailihatperilakukerja', 'PenilaiLihatPerilakukerjaController@index')->name('homePenilailihatperilakukerja');

    // route penilai daftar hitung skp
    Route::get('/penilaidaftarhitungskp', 'PenilaiDaftarHitungSkpController@index')->name('homePenilaiDaftarHitungSkp');

    // route penilai hasil skp
    Route::get('/penilaihasilskp/{nik}', 'PenilaiHasilSkpController@index')->name('homePenilaiHasilSkp');

    //surat
    Route::get('/penilaisurathasiltpp/lihatpenilaisurattpp', 'PenilaiSurattppController@lihat')->name('viewsuratpenilaitpp');


});



// route jalurnya kabag
Route::group(['middleware' => ['auth','ceklevel:4']], function(){
    Route::get('kepalabagian', 'KepalabagianController@index')->name('homeKepalabagian');

    // izinstudi
    Route::get('/kabagizinstudilanjut', 'KabagIzinstudilanjutController@index')->name('homeKabagIzinstudilanjut');
    Route::post('/kabagizinstudilanjut/inputkabagizinstudilanjut', 'KabagIzinstudilanjutController@store')->name('inputkabagizinstudilanjut');
    Route::get('/kabagizinstudilanjut/formeditkabagpegawaiizinstudilanjut/{nik}', 'KabagIzinstudilanjutController@show')->name('formeditkabagizinstudilanjut');
    Route::post('/kabagizinstudilanjut/updatekabag/{nik}', 'KabagIzinstudilanjutController@update')->name('updatekabagizinstudilanjut');
    Route::get('/kabagizinstudilanjut/deletekabag/{nik}', 'KabagIzinstudilanjutController@destroy')->name('deletekabagizinstudilanjut');

    // izincuti
    Route::get('/kabagizincuti', 'KabagIzincutiController@index')->name('homeKabagIzincuti');
    Route::post('/kabagizincuti/inputkabagizincuti', 'KabagIzincutiController@store')->name('inputkabagizincuti');
    Route::get('/kabagizincuti/formeditkabag/{nik}', 'KabagIzincutiController@show')->name('formeditkabagizincuti');
    Route::post('/kabagizincuti/updatekabag/{nik}', 'KabagIzincutiController@update')->name('updatekabagizincuti');
    Route::get('/kabagizincuti/deletekabag/{nik}', 'KabagIzincutiController@destroy')->name('deletekabagizincuti');

    // surat
    Route::get('/kabagsurat', 'KabagSuratController@index')->name('KabagSurat');
    // Route::post('/kabagsurat/inputkabagsurat', 'KabagSuratController@store')->name('inputkabagsurat');
    // Route::get('/kabagsurat/formeditkabagsurat/{nik}', 'KabagSuratController@show')->name('formeditkabagsurat');
    // Route::post('/kabagsurat/updatekabagsurat/{nik}', 'KabagSuratController@update')->name('updatekabagsurat');
    // Route::get('/kabagsurat/deletekabagsurat/{nik}', 'KabagSuratController@destroy')->name('deletekabagsurat');
    // Route::get('/kabagsurat/lihatsurat/{nik}', 'KabagSuratController@lihat')->name('viewkabagsurat');

    // route pegawai kenaikan pangkat
    Route::get('/kabagkenaikanpangkat', 'KabagKenaikanpangkatController@index')->name('homeKabagKenaikanpangkat');
    Route::post('/kabagkenaikanpangkat/inputkabagkenaikanpangkat', 'KabagKenaikanpangkatController@store')->name('inputkabagkenaikanpangkat');
    Route::get('/kabagkenaikanpangkat/formedit/{nik}', 'KabagKenaikanpangkatController@show')->name('formeditkabagkenaikanpangkat');
    Route::post('/kabagkenaikanpangkat/update/{nik}', 'KabagKenaikanpangkatController@update')->name('updatekabagkenaikanpangkat');
    Route::get('/kabagkenaikanpangkat/delete/{nik}', 'KabagKenaikanpangkatController@destroy')->name('deletekabagkenaikanpangkat');

    // route pegawai kenaikan gaji
    Route::get('/kabagkenaikangaji', 'KabagKenaikangajiController@index')->name('homeKabagKenaikangaji');
    Route::post('/kabagkenaikangaji/inputkabagkenaikangaji', 'KabagKenaikangajiController@store')->name('inputkabagkenaikangaji');
    Route::get('/kabagkenaikangaji/formedit/{nik}', 'KabagKenaikangajiController@show')->name('formeditkabagkenaikangaji');
    Route::post('/kabagkenaikangaji/update/{nik}', 'KabagKenaikangajiController@update')->name('updatekabagkenaikangaji');
    Route::get('/kabagkenaikangaji/delete/{nik}', 'KabagKenaikangajiController@destroy')->name('deletekabagkenaikangaji');

    // Hasil Akhir
    Route::get('/hasilakhir', 'HasilAkhirController@index')->name('homeHasilAkhir');
    Route::post('/hasilakhir/inputhasilakhir', 'HasilAkhirController@store')->name('inputhasilakhir');
    Route::get('/hasilakhir/formedithasilakhir/{nik}', 'HasilAkhirController@show')->name('formedithasilakhir');
    Route::post('/hasilakhir/updatehasilakhir/{nik}', 'HasilAkhirController@update')->name('updatehasilakhir');
    Route::get('/hasilakhir/deletehasilakhir/{nik}', 'HasilAkhirController@destroy')->name('deletehasilakhir');
    Route::get('/hasilakhir/lihathasilakhir/{nik}', 'HasilAkhirController@create')->name('viewnilai');

    //surat kabag
    Route::post('/kabagsurat/inputkabagsurat', 'KabagSuratController@store')->name('inputkabagsurat');
    Route::get('/kabagsurat/formeditkabagsurat/{nik}', 'KabagSuratController@show')->name('formeditkabagsurat');
    Route::post('/kabagsurat/updatekabagsurat/{nik}', 'KabagSuratController@update')->name('updatekabagsurat');
    Route::get('/kabagsurat/deletekabagsurat/{nik}', 'KabagSuratController@destroy')->name('deletekabagsurat');
    Route::get('/kabagsurat/lihatsurat/{nik}', 'KabagSuratController@lihat')->name('viewkabagsurat');
});
