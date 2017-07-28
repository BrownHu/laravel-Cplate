<?php

use Illuminate\Routing\Router;
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

});
