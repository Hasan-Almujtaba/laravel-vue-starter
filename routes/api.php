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

// Route::middleware('auth:api')->group(function () {
//   Route::get('user', 'AuthController@user');
//   Route::get('logout', 'AuthController@logout');
// });

Route::apiResource('cars', 'CarController');
Route::apiResource('car-details', 'CarDetailController');
Route::apiResource('car-galleries', 'CarGalleryController');
Route::apiResource('car-specifications', 'CarSpecificationController');
Route::apiResource('car-three-sixties', 'CarThreeSixtyController');
Route::apiResource('car-variants', 'CarVariantController');
Route::apiResource('inventories', 'InventoryController');
Route::apiResource('banners', 'BannerController');

