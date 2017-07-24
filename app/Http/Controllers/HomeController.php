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
        $topic=(['Cname'=>'产品展示','Ename'=>'Product Show','url'=>'product']);
        return view('home.product',$topic);
    }
    /*客户案例*/
    public function customer(){
        $topic=(['Cname'=>'客户案例','Ename'=>'Customer Case','url'=>'customer']);

        return view('home.customer',$topic);
    }
    /*服务中心*/
    public function service(){
        $topic=(['Cname'=>'服务中心','Ename'=>'Service Center','url'=>'servce']);

        return view('home.service',$topic);
    }
    /*新闻动态*/
    public function news(){
        $topic=(['Cname'=>'新闻动态','Ename'=>'News Center','url'=>'news']);

        return view('home.news',$topic);
    }
    /*关于我们*/
    public function about(){
        $topic=(['Cname'=>'关于我们','Ename'=>'About Us','url'=>'employ']);
        return view('home.about',$topic);
    }
    /*招贤纳士*/
    public function employ(){
        $topic=(['Cname'=>'招贤纳士','Ename'=>'Employment','url'=>'employ']);
        return view('home.employ',$topic);
    }
    /*解决方案*/
    public function solution(){
        $topic=(['Cname'=>'解决方案','Ename'=>'Solution Case','url'=>'solution']);
        return view('home.solution',$topic) ;
    }


    public function getCurrentMethod()
    {
        $action = Route::current()->getActionName();
        list($class,$method)= explode('@', $action);
        return $method;
    }
}
