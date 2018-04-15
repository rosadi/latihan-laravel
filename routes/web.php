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

Route::get('/', 'homeController@index');

# cara memanggil langsung ke tiap halaman di satu controller
Route::group(['prefix' => 'home'], function(){

    # menggunakan controll homeController
    Route::get('/', 'homeController@index');
    
    Route::get('/data_barang', 'homeController@data_barang');
    Route::get('/detail_barang/{id_barang}', 'homeController@detail_barang');

    Route::get('/data_blogs', 'homeController@data_blogs');
    
});