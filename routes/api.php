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

Route::post('store-category','CategoryController@store');
Route::get('get-categories','CategoryController@getCategories');
Route::post('product-create','ProductsController@store');
Route::get('get-products','ProductsController@getProducts');
Route::get('get-product/{id}','ProductsController@show');
Route::get('delete-products/{id}','ProductsController@delete');
