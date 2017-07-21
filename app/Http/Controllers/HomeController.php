<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        $AllTopic=["product"=>"产品展示","customer"=>"客户案例","service"=>"服务中心","news"=>"新闻中心","about"=>"关于我们",'employ'=>"招贤纳士"];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*首页*/
    public function index()
    {
        return view('home.index');
    }

    /*产品展示*/
    public function product(){
        return view('home.product')->with('topic','产品展示');
    }
    /*客户案例*/
    public function customer(){

        return view('home.customer')->with('topic','客户案例');
    }
    /*服务中心*/
    public function service(){
        return view('home.service')->with('topic','服务中心');
    }
    /*新闻动态*/
    public function news(){
        return view('home.news')->with('topic',"新闻动态");
    }
    /*关于我们*/
    public function about(){
        return view('home.about')->with('topic','关于我们');
    }
    /*招贤纳士*/
    public function employ(){
        return view('home.employ')->with('topic',"招贤纳士");
    }





    public function getCurrentMethod()
    {
        $action = Route::current()->getActionName();
        list($class,$method)= explode('@', $action);
        return $method;
    }
}
