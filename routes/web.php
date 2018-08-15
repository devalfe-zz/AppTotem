<?php
use GuzzleHttp\Client;

Route::group(['prefix' => 'dashboard'], function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('dashboard');
    Route::view('categorias', 'pages.dashboard');
    Route::resource('categoria', 'CategoriaController', ['except' => 'show', 'create', 'edit']);

    Route::get('{path}', function () {
        return view('index');
    })->where('path', '(.*)');

    Route::get('password/reset/{token}', function () {
        return view('index');
    })->name('password.reset');
});

Route::group(['middleware' => ['web']], function () {
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
                'base_uri' => 'https://tv-v2.api-fetch.website/movies/',
                'timeout'  => 5.0,
            ]);
            $response = $client->request('GET', '1');
            $carteleras = json_decode ($response->getBody()->getContents());
            //dd($carteleras);
            return view('pages.cartelera',compact('carteleras'));
    })->name('cine');
});

Route::get('oauth/{driver}', 'Auth\OAuthController@redirectToProvider')->name('oauth');
Route::get('oauth/{driver}/callback', 'Auth\OAuthController@handleProviderCallback')->name('oauth.callback');

