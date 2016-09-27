<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::group(['middleware'=>['web']],function(){
    Route::get('/',['as'=>'index','uses'=>'Product\ProductController@index']);
    Route::get('marca',['as'=>'marcas','uses'=>'Product\ProductController@js']);
    Route::get('jas',['as'=>'js','uses'=>'Product\ProductController@js2']);
    Route::get('jsss',['as'=>'jsss','uses'=>'Product\ProductController@jss']);
});
