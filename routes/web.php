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


Route::get('ujian', 'UjianController@index')->
	name('ujian.index');

Route::get('ujian/add', 'UjianController@add')->
	name('ujian.add');

Route::post('ujian/save', 'UjianController@save')->
	name('ujian.save');