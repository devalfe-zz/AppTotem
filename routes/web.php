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
 use GuzzleHttp\Client;
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('categorias', function () {
//     return view('pages.dashboard');
// });
//Route::resource('tasks', 'TaskController', ['except' => 'show', 'create', 'edit']);
Route::group(['prefix' => 'admin'], function () {
    Route::view('categorias', 'pages.dashboard');
    Route::resource('categoria', 'CategoriaController', ['except' => 'show', 'create', 'edit']);    
});
// Route::get('categoria', function () {
//     return view('pages.dashboard');
// });

Route::get('/', 'PagesController@index')->name('index');
Route::get('/home','PagesController@inicio')->name('home');
Route::get('/atractivo','AtrativoController@dentro')->name('dentro');
Route::get('/atractivos','AtrativoController@fuera')->name('fuera');
Route::get('/lugares','AtrativoController@index')->name('lugares');
Route::get('/servicios','AtrativoController@servicios')->name('servicios');
Route::get('/multimedia','AtrativoController@multimedia')->name('multimedia');
Route::get('/transporte','AtrativoController@transporte')->name('transporte');
Route::get('/alojamiento','AtrativoController@alojamiento')->name('alojamiento');
Route::get('/restaurante','AtrativoController@restaurante')->name('restaurante');
Route::view('/telefonos', 'pages.telefono')->name('telefono');
Route::view('/historia', 'pages.historia')->name('historia');
Route::view('/turismo', 'pages.turismo')->name('turismo');
Route::get('/atractivo/{id}','AtrativoController@detalle')->name('detalle');
Route::get('/atractivos/{id}','AtrativoController@map')->name('map');
Route::get('/mapa','AtrativoController@maps')->name('mapa');
Route::get('/cartelera', function () {
   $client = new Client([
        'base_uri' => 'https://tv-v2.api-fetch.website',
        'timeout'  => 5.0,
    ]);
    $response = $client->request('GET', 'movies/1');
    $carteleras = json_decode ($response->getBody()->getContents());
    return view('pages.cartelera',compact('carteleras'));
})->name('cine');


//Route::get('detalle/','AtrativoController@maps')->name('mapa');

//Route::get('/quehacer','PagesController@index')->name('atractivos');
//|Route::get('/plan_viaje','PagesController@index')->name('atractivos');
//Route::get('/servicios','PagesController@index')->name('atractivos');

