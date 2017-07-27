@extends('home.common.layout')
@section('menu')
    <li class="hb-menu-active"><a href="{{url('solution')}}">解决方案</a></li>
    <li><a href="{{url('product')}}">产品展示 </a></li>
    <li><a href="{{url('customer')}}">客户案例 </a></li>
    <li><a href="{{url('service')}}">服务中心 </a></li>
    <li><a href="{{url('news')}}">新闻动态 </a></li>
    <li><a href="{{url('about')}}">关于我们</a></li>
    <li><a href="{{url('employ')}}">招贤纳士 </a></li>

@endsection

@section('content')
<div class="slide">
    <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}'>
        <ul class="am-slides">
            <li><img src="../img/hw_bg1.png"/></li>
            <li><img src="../img/hw_bg.png"/></li>
            <li><img src="../img/hw_bg3.png"/></li>
        </ul>
    </div>
</div>
<!--slideend-->

<div class="am-container-1 hb-solution" id="solution">
    <div class="hb-solution-title">
        <i class="am-icon-lightbulb-o"></i>
        <span>解决方案</span>
        <p>Solution</p>
    </div>
    <div class="so-content">
        <div class="am-g">
            <div class="am-u-sm-6 am-u-lg-3">
                <i class="am-icon-safari"></i>
                <p class="hb-so-con-title">网站、移动网站</p>
                <p class="hb-so-con-detail">移动网站微信公众号开发移动网站微信公众号开发,解决方案</p>

            </div>
            <div class="am-u-sm-6 am-u-lg-3">
                <i class="am-icon-magic"></i>
                <p class="hb-so-con-title">网站、移动网站</p>
                <p class="hb-so-con-detail">移动网站微信公众号开发移动网站微信公众号开发,解决方案</p>

            </div>
            <div class="am-u-sm-6 am-u-lg-3">
                <i class="am-icon-phone"></i>
                <p class="hb-so-con-title">网站、移动网站</p>
                <p class="hb-so-con-detail">移动网站微信公众号开发移动网站微信公众号开发,解决方案</p>
            </div>
            <div class="am-u-sm-6 am-u-lg-3">
                <i class="am-icon-hacker-news"></i>
                <p class="hb-so-con-title">网站、移动网站</p>
                <p class="hb-so-con-detail">移动网站微信公众号开发移动网站微信公众号开发,解决方案</p>

            </div>
        </div>
    </div>

</div>
<!--end solution-->

<div class="am-container-2 hb-case" id="customer">
    <i class="am-icon-briefcase "></i>
    <span>客户案例</span>
    <p>Customer Case</p>
    <ul class="am-avg-sm-1 am-avg-md-4 hb-case-ul">
        <li><img src="../img/app1.png" alt="" class="am-img-responsive">
            <div class="case-info">
                <p>响应式商城</p>
                <span>2015-06-11</span>
                <a><i class="am-icon-eye">查看更多</i></a>
            </div>
        </li>
        <li>
            <img src="../img/app2.png" alt="" class="am-img-responsive">
            <div class="case-info">
                <p>响应式商城</p>
                <span>2015-06-11</span>
                <a><i class="am-icon-eye">查看更多</i></a>
            </div>
        </li>
        <li>
            <img src="../img/app3.png" alt="" class="am-img-responsive">
            <div class="case-info">
                <p>响应式商城</p>
                <span>2015-06-11</span>
                <a><i class="am-icon-eye">查看更多</i></a>
            </div>
        </li>
        <li>
            <img src="../img/app4.png" alt="" class="am-img-responsive">
            <div class="case-info">
                <p>响应式商城</p>
                <span>2015-06-11</span>
                <a><i class="am-icon-eye">查看更多</i></a>
            </div>
        </li>
        <li>
            <img src="../img/app4.png" alt="" class="am-img-responsive">
            <div class="case-info">
                <p>响应式商城</p>
                <span>2015-06-11</span>
                <a><i class="am-icon-eye">查看更多</i></a>
            </div>
        </li>
        <li>
            <img src="../img/app3.png" alt="" class="am-img-responsive">
            <div class="case-info">
                <p>响应式商城</p>
                <span>2015-06-11</span>
                <a><i class="am-icon-eye">查看更多</i></a>
            </div>
        </li>
        <li>
            <img src="../img/app2.png" alt="" class="am-img-responsive">
            <div class="case-info">
                <p>响应式商城</p>
                <span>2015-06-11</span>
                <a><i class="am-icon-eye">查看更多</i></a>
            </div>
        </li>
        <li>
            <img src="../img/app1.png" alt="" class="am-img-responsive">
            <div class="case-info">
                <p>响应式商城</p>
                <span>2015-06-11</span>
                <a><i class="am-icon-eye">查看更多</i></a>
            </div>
        </li>
    </ul>
</div>

<div class="am-container-3">
    <div class="left">
        <span>全方位解决方案,为您轻松解决不同问题</span>
        <p>A full range of solutions for you to solve different problems
        </p>
    </div>
    <div class="right">
        <a href="#"><span class="see-more">查看更多<i class="am-icon-angle-double-right"></i></span></a>
    </div>
</div>
<!--end  allcase-->
<div class="am-container-4" id="news">
    <div class="new-title">
        <i class="am-icon-newspaper-o"></i><span>新闻动态</span>
        <p>HengWang News</p>
    </div>
    <div class="hb-news">
        <ul class="hb-news-ul">
            <li class="am-u-sm-12 am-u-lg-6">
                <a href="">
                    <div class="am-u-lg-5">
                        <div class="hb-news-img">
                            <img src="../img/news.png" alt="">
                        </div>
                    </div>
                </a>
                <div class="am-lg-7 hb-news-content">
                    <a href=""><p class="title">关于召开年会的通知</p></a>
                    <p class="date">2015-06-12</p>
                    <p class="body">互联网，又称网际网路或音译因特网、英特网，是网络与网络之间所串连成的庞大网络网络与网络之...</p>
                    <a href="" class="news-see-more am-btn am-btn-primary am-radius">查看更多<i
                            class="am-icon-angle-double-right"></i></a>
                </div>
            </li>
            <li class="am-u-sm-12 am-u-lg-6">
                <a href="">
                    <div class="am-u-lg-5">
                        <div class="hb-news-img">
                            <img src="../img/news1.png">
                        </div>
                    </div>
                </a>
                <div class="am-lg-7 hb-news-content">
                    <a href=""><p class="title">关于召开年会的通知</p></a>
                    <p class="date">2015-06-12</p>
                    <p class="body">互联网，又称网际网路或音译因特网、英特网，是网络与网络之间所串连成的庞大网络网络与网络之...</p>
                    <a href="" class="news-see-more am-btn am-btn-primary am-radius">查看更多<i
                            class="am-icon-angle-double-right"></i></a>
                </div>
            </li>
            <div class="clear"></div>

        </ul>
    </div>

</div>
<!--end news-->
<div class="am-container-5" id="service">
    <div class="hb-cus-part">
        <i class="am-icon-users"></i>
        <span>服务客户</span>
        <p>Server Customer</p>
    </div>
    <div class="hb-cus-slider">
        <div
                class="am-slider am-slider-default am-slider-carousel hb-slider"
                data-am-flexslider="{itemWidth: 150, itemMargin: 5, slideshow: false}" style="box-shadow: none">
            <ul class="am-slides ">
                <li><img src="../img/ptn4.png"/></li>
                <li><img src="../img/ptn5.png"/></li>
                <li><img src="../img/ptn6.png"/></li>
                <li><img src="../img/ptn7.png"/></li>
                <li><img src="../img/ptn8.png"/></li>
                <li><img src="../img/ptn8.png"/></li>
                <li><img src="../img/ptn4.png"/></li>
                <li><img src="../img/ptn5.png"/></li>
                <li><img src="../img/ptn5.png"/></li>
                <li><img src="../img/ptn6.png"/></li>
                <li><img src="../img/ptn7.png"/></li>
                <li><img src="../img/ptn8.png"/></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>
    @endsection