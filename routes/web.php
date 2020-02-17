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

// route admin pegawai
Route::get('/adminpegawai', 'AdminPegawaiController@index')->name('homeAdminPegawai');

// route admin izin studi lanjut
Route::get('/adminizinstudilanjut', 'AdminIzinstudilanjutController@index')->name('homeAdminIzinstudilanjut');
