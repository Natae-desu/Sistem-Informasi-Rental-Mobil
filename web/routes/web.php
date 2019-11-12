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

Route::resource('supir', 'supircontroller');
Route::resource('mobil', 'Mobilcontroller');
Route::resource('pelanggan', 'pelanggancontroller');
});



Route::get("/register",function(){
    return view('pages.register');
})->name("register")->middleware("guest");

Route::get("/login",function(){
    return view('pages.login');
})->name("login")->middleware("guest");

