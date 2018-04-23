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

Route::get('/', 'queryBuilderController@index');
Route::get('/', 'queryBuilderController@index')->name('home');

# menggunakan query builder
# cara memanggil langsung ke tiap halaman di satu controller
Route::group(['prefix' => 'home'], function(){

    # menggunakan controll queryBuilderController
    Route::get('/', 'queryBuilderController@index');
    
    Route::get('/data_barang', 'queryBuilderController@data_barang');
    Route::get('/detail_barang/{id_barang}', 'queryBuilderController@detail_barang');

    # menggunakan ->name('data_blogs') agar dapat menggunakan route
    Route::get('/data_blogs', 'queryBuilderController@data_blogs')->name('data_blogs');
    Route::get('/detail_blog/{id}', 'queryBuilderController@detail_blog');

    Route::get('/data_anak', 'queryBuilderController@data_anak');
    Route::get('/detail_anak/{id_anak}', 'queryBuilderController@detail_anak');

    Route::get('/data_komentar', 'queryBuilderController@data_komentar');
    Route::get('/detail_komentar/{id}', 'queryBuilderController@detail_komentar');

    Route::get('/data_users', 'queryBuilderController@data_users');
    Route::get('/detail_user/{id}', 'queryBuilderController@detail_user');
    
});

# menggunakan eloquent
# code ini memanggil link dengan menggunakan route ('home_qloquent')
Route::get('/home_eloquent', 'queryEloquentController@index')->name('home_eloquent');

Route::group(['prefix' => 'home_eloquent'], function(){

    Route::get('/data_barang', 'queryEloquentController@data_barang');
    Route::get('/detail_barang/{id_barang}', 'queryEloquentController@detail_barang');

    Route::get('/data_blog', 'queryEloquentController@data_blog');
    Route::get('/detail_blog/{id}', 'queryEloquentController@detail_blog');

    Route::get('/data_anak', 'queryEloquentController@data_anak');
    Route::get('/detail_anak/{id_anak}', 'queryEloquentController@detail_anak');

    Route::get('/data_komentar', 'queryEloquentController@data_komentar');
    Route::get('/detail_komentar/{id}', 'queryEloquentController@detail_komentar');
    
});

Route::get('crud_eloquent', 'CrudEloquent@index')->name('crud_eloquent');

Route::group(['prefix' => 'crud_eloquent'], function(){

    Route::get('/view_barang', 'CrudEloquent@view_barang');
    Route::get('/add_barang', 'CrudEloquent@add_barang');
    Route::get('/edit_barang/{id_barang}', 'CrudEloquent@edit_barang');
    Route::get('/delete_barang/{id_barang}', 'CrudEloquent@delete_barang');

});