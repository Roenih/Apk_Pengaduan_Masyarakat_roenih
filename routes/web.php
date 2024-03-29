<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\CheckRole;
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
    return view('landing');
});

Route::get('/dashboard', 'DashboardController@index');

Route::get('/login', function () {
    return view('pengguna.login');
});

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/registrasi', 'LoginController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi', 'LoginController@simpanregistrasi')->name('simpanregistrasi');

Route::get('/logout','LoginController@logout');


Route::post('/getkabupaten', 'LoginController@getkabupaten')->name('getkabupaten');
Route::post('/getkecamatan', 'LoginController@getkecamatan')->name('getkecamatan');
Route::post('/getdesa', 'LoginController@getdesa')->name('getdesa');

// user
Route::group(['middleware' => ['auth','role:admin']],function(){
    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/user/create', 'UserController@create');
    Route::post('/user/store', 'UserController@store');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::put('/user/update/{id}', 'UserController@update');
    Route::get('/user/delete/{id}', 'UserController@destroy');
    Route::get('/user/cetak-pdf', 'UserController@cetakPDF');
 });


Route::group(['middleware' => ['auth','role:admin,petugas,user']],function(){
    Route::get('/pengaduan', 'PengaduanController@index')->name('pengaduan');
    Route::get('/pengaduan/create', 'PengaduanController@create');
    Route::post('/pengaduan/store', 'PengaduanController@store');
    Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit');
    Route::put('/pengaduan/update/{id}', 'PengaduanController@update');
    Route::get('/pengaduan/delete/{id}', 'PengaduanController@destroy');
    Route::get('/pengaduan/cetak-pdf', 'PengaduanController@cetakPDF');

    

    Route::get('/tanggapan', 'TanggapanController@index')->name('tanggapan');
    Route::get('/tanggapan/create', 'TanggapanController@create');
    Route::post('/tanggapan/store', 'TanggapanController@store');
    Route::get('/tanggapan/edit/{id}', 'TanggapanController@edit');
    Route::put('/tanggapan/update/{id}', 'TanggapanController@update');
    Route::get('/tanggapan/delete/{id}', 'TanggapanController@destroy');
    Route::get('/tanggapan/action/{id}', 'TanggapanController@tanggapanAction');
    Route::get('/tanggapan/selesai/{id}', 'TanggapanController@statusAction');
});