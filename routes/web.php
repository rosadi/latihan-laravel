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
    Route::get('/detail_blog/{id}', 'homeController@detail_blog');

    Route::get('/data_anak', 'homeController@data_anak');
    Route::get('/detail_anak/{id_anak}', 'homeController@detail_anak');

    Route::get('/data_komentar', 'homeController@data_komentar');
    Route::get('/detail_komentar/{id}', 'homeController@detail_komentar');

    Route::get('/data_users', 'homeController@data_users');
    Route::get('/detail_user/{id}', 'homeController@detail_user');
    
});