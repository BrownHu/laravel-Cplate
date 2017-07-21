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

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group([],function (){
    Route::get('about',"HomeController@about");
    Route::get('service',"HomeController@service");
    Route::get('customer',"HomeController@customer");
    Route::get('news',"HomeController@news");
    Route::get('employ',"HomeController@employ");
    Route::get('product',"HomeController@product");
});