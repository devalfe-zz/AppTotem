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
Route::get('/', 'IndexController@index');
Route::get('/inicio', 'InicioController@index');
Route::get('/dondeir','Pages1controller@index');
Route::get('/quehacer','Pages2controller@index');
Route::get('/plan_viaje','Pages3controller@index');
Route::get('/servicios','Pages4controller@index');

