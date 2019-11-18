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
    return view('pages.login');
});

Auth::routes();

Route::middleware("auth")->group(function () {
    Route::get('/home', function(){
        return view('pages.dashboard');
    })->name("home");
    Route::get('/cek', function(){
        return view('pages.transaksi.statuscek');
    })->name("cekstatus");

Route::resource('supir', 'supircontroller');
Route::resource('mobil', 'Mobilcontroller');
Route::resource('pelanggan', 'pelanggancontroller');

Route::get('pengembalianmobil/list', 'pengembaliancontroller@pengembalianmobil')->name('pengembalianmobil');

Route::get('transaksi/list', 'TransaksiController@transaksilist')->name('list.transaksi');
Route::get('transaksi/cek', 'cekcontroller@status')->name('cekstatus');


Route::get('laporanpemesanan/list', 'Laporan1Controller@laporan1list')->name('list.laporanpemesanan');
Route::get('laporanpemakaian/list', 'Laporan2Controller@laporan2list')->name('laporanpemakaian.list');
Route::get('laporanpemakaian/laporan1', 'Form1Controller@form1list')->name('laporanpemakaian.form');
Route::get('statuspmobil/list', 'StatusmobilController@statusmobillist')->name('statuspmobil.list');
Route::get('statuspmobil/status', 'StatusController@statusmobilstatus')->name('statuspmobil.status');

});



Route::get("/register",function(){
    return view('pages.register');
})->name("register")->middleware("guest");

Route::get("/login",function(){
    return view('pages.login');
})->name("login")->middleware("guest");

