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
    return view('home');
});

Route::get('/print','PrintController@index')->name('print.index');
Route::get('/print/tambah','PrintController@tambah')->name('print.tambah');
Route::post('/print/simpan','PrintController@simpan')->name('print.simpan');
Route::get('/print/{id}/edit','PrintController@edit')->name('print.edit');
Route::get('/print/{id}/detail','PrintController@detail')->name('print.detail');
