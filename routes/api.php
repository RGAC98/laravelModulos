<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/modulos', 'App\Http\Controllers\modulosController@index');
Route::get('/modulos/{id}', 'App\Http\Controllers\modulosController@show');
Route::post('/modulos', 'App\Http\Controllers\modulosController@store');
Route::put('/modulos', 'App\Http\Controllers\modulosController@update');
Route::delete('/modulos', 'App\Http\Controllers\modulosController@destroy');