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
    Route::get('about',"HomeController@service");
    Route::get('about',"HomeController@customer");
    Route::get('about',"HomeController@news");
    Route::get('about',"HomeController@employ");
    Route::get('about',"HomeController@solution");
});