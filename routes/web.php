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

// Route::get('/', function () {
//     return view('template');
// });
Route::get('/', 'PagesController@index');
Route::view('home', 'inicio')->name('home');
Route::get('atractivo','AtrativoController@dentro')->name('dentro');
Route::get('atractivos','AtrativoController@fuera')->name('fuera');
Route::get('detalle/{id}','GaleriaController@index')->name('detalle');

//Route::get('/quehacer','PagesController@index')->name('atractivos');
//|Route::get('/plan_viaje','PagesController@index')->name('atractivos');
//Route::get('/servicios','PagesController@index')->name('atractivos');

