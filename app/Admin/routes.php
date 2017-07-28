<?php

use Illuminate\Routing\Router;
use Illuminate\Http\Request;
Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('nav',NavController::class);
    $router->resource('touch',TouchController::class);
    $router->resource('staff',StaffController::class);
    $router->resource('phone',PhoneController::class);
    $router->resource('card',CardController::class);
    $router->put('nav/{id?}',function($id){
//        die();
        $map['Cname']='shit';
        $map['Ename']='Rock';
        $map['url']=$id;
        $map['sort']=29;
        \App\Nav::create($map);
//        $ena=$request->get('enable');
//        $enable=$ena=="off"?0:1;
//        $map['enable']=$enable;
//        \App\Nav::find($id)->update($map);
//        \App\Nav::find($id)->update(['url'=>'mother fucker']);
    });
    $router->get('ji','Homecontroller@jiji')->name('jiji');
});
