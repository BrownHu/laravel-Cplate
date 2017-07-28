<?php

namespace App\Http\Controllers;
use App\Nav;
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
        $topic=$this->getNav($this->getCurrentMethod());
        return view('home.product')->with('topic',$topic[0]);
    }
    /*客户案例*/
    public function customer(){
        $topic=$this->getNav($this->getCurrentMethod());
        return view('home.customer')->with('topic',$topic[0]);
    }
    /*服务中心*/
    public function service(){
        $topic=$this->getNav($this->getCurrentMethod());

        return view('home.service')->with('topic',$topic[0]);
    }
    /*新闻动态*/
    public function news(){
        $topic=$this->getNav($this->getCurrentMethod());

        return view('home.news')->with('topic',$topic[0]);
    }
    /*关于我们*/
    public function about(){
        $topic=$this->getNav($this->getCurrentMethod());
        return view('home.about')->with('topic',$topic[0]);
    }
    /*招贤纳士*/
    public function employ(){
        $topic=$this->getNav($this->getCurrentMethod());
        return view('home.employ')->with('topic',$topic[0]);
    }
    /*解决方案*/
    public function solution(){
        $topic=$this->getNav($this->getCurrentMethod());
        return view('home.solution')->with('topic',$topic[0]) ;
    }
    public function   getNav($ename){
        return  Nav::where('url','=',$ename)->get();
    }
    public function demo(){
    }
    public function getCurrentMethod()
    {
        $action = Route::current()->getActionName();
        list($class,$method)= explode('@', $action);
        return $method;
    }
    public function solutionin(Request $request){

        return view('home.solutionin');
    }
}
