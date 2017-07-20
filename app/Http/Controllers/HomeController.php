<?php

namespace App\Http\Controllers;

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
        return view('home.product');
    }
    /*客户案例*/
    public function customer(){
        return view('home.customer');
    }
    /*服务中心*/
    public function service(){
        return view('home.service');
    }
    /*新闻动态*/
    public function news(){
        return view('home.news');
    }
    /*关于我们*/
    public function about(){
        return view('home.about');
    }
    /*招贤纳士*/
    public function employ(){
        return view('home.employ');
    }
}
