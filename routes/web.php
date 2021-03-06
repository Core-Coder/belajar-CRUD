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

Route::get('/pertanyaan', 'pertanyaanController@index');
Route::get('/pertanyaan/create', 'pertanyaanController@create');
Route::post('/pertanyaan', 'pertanyaanController@store');

// Route::get('/pertanyaan/{id}', 'pertanyaanController@show');

Route::get('/pertanyaan/{id}/edit', 'pertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'pertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'pertanyaanController@destroy');

Route::get('/jawaban/create', 'jawabanController@create');
Route::post('/jawaban/{id}', 'jawabanController@store');
Route::get('/pertanyaan/{id}', 'jawabanController@showa');

