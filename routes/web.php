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
Route::get('/inicio', 'PagesController@inicio')->name('home');;
Route::get('/dondeir','AtrativoController@index')->name('atractivos');
Route::get('/quehacer','Pages2controller@index');
Route::get('/plan_viaje','Pages3controller@index');
Route::get('/servicios','Pages4controller@index');

