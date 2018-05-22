<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'v1', 'middleware' => 'cors'],function () {
    //header('Access-Control-Allow-Origin: *');
    Route::get('atractivo','AtractivosApiController@index');
    Route::get('atractivo/{id}','AtractivosApiController@show');
    Route::get('categoria','AtractivosApiController@categorias');
    Route::get('categoria/{id}','AtractivosApiController@categoria');
    Route::get('galeria','AtractivosApiController@galerias');
    Route::get('galeria/{id}','AtractivosApiController@galeria');
    
    Route::get('lugares','AtractivosApiController@lugares');
    Route::get('lugar/{id}','AtractivosApiController@lugar');
});