<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login','API\TaskController@postLogin');
// http://127.0.0.1:8000/api/login

Route::get('listmobil','API\TaskController@getlistmobil');
// http://127.0.0.1:8000/api/listmobil

Route::get('detailmobil/{idmobil}','API\TaskController@getdetailmobil');
// http://127.0.0.1:8000/api/detailmobil/{idmobil}

Route::get('listpesan','API\TaskController@getlistpesan');
// http://127.0.0.1:8000/api/listpesan