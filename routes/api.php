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
Route::put('/modulos/{id}', 'App\Http\Controllers\modulosController@update');

Route::get('/consultas', 'App\Http\Controllers\consultasController@index');