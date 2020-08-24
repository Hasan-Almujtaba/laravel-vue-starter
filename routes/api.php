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

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

Route::middleware('auth:api')->group(function () {
  Route::get('user', 'AuthController@user');
  Route::get('logout', 'AuthController@logout');
  Route::apiResource('tools', 'ToolController');
  Route::apiResource('styles', 'StyleController');
  Route::apiResource('plugins', 'PluginController');
  Route::apiResource('references', 'ReferenceController');
});

Route::get('tool', 'ToolController@index');
Route::get('style', 'StyleController@index');
Route::get('plugin', 'PluginController@index');
Route::get('reference', 'ReferenceController@index');
