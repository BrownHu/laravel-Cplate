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
use App\Menu;
use Intervention\Image\Facades\Image;

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group([],function (){
    Route::get('about',"HomeController@about");
    Route::get('solution',"HomeController@solution");
    Route::get('service',"HomeController@service");
    Route::get('customer',"HomeController@customer");
    Route::get('news',"HomeController@news");
    Route::get('employ',"HomeController@employ");
    Route::get('product',"HomeController@product");
});

/*测试路由ignore*/

Route::get('test',function (){
    dd(asset('sf').storage_path());
    $st=\App\Staff::find(1)->phone->number;
    dd($st);
     return view('demo');
});

Route::get('user/getHeadImg/{filename?}',function ( $filename){

    $add=storage_path().'/app/admin/image/'.$filename;
    try {
        $img = Image::make($add);
    }catch(Exception $e){
        return  $e->getMessage();
    }
    return $img->response('jpg');
});

Route::get('inform',function(){
    return view('home.solutionin');
});
