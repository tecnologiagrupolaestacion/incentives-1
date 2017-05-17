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

Route::middleware('auth:api')->get('/test', function () {
    return 'API authentication OK';
});
Route::get('entities/{identification}', 'EntitiesController@showByIdentification');
Route::post('entities/{identification}/addvalue', 'EntitiesController@addvalue');


