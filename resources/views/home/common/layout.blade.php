<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/home/amazeui.css')}}">
    <link rel="alternate icon" type="../img/hengwang-1.png" href="{{asset('img/hengwang-1.png')}}">
    <link rel="stylesheet" href="{{asset('css/home/mine.css')}}">
    <title>Crazycode-{{$Cname or "恒望科技"}}</title>
</head>
<body>


<header class="am-topbar am-topbar-1 ">
    <div class="am-container-1">
        <div class="left hb-logo">
            <a href="/"><img class="hb" src="../img/HENGWANG.png" alt="">
            <img class="word" src="../img/hw-word.png" alt=""></a>
        </div>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
                data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
                    class="am-icon-bars"></span></button>
        <div class="am-collapse am-topbar-collapse right " id="doc-topbar-collapse">
            <div class="am-topbar am-form-inline am-topbar-right">
                <ul class="am-nav am-nav-pills am-topbar-nav hb-menu" role="search">
                    @foreach($allList as $li)
                    <li><a href="{{$li['url']}}">{{$li['Cname']}} </a></li>
                        @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div style="clear: both;">

    </div>
</header>
@yield('topic')
@yield('content')
@yield('solutionin')
@yield('customer')
@yield('product')
@yield('solution')
@yield('about')
@yield('news')
@yield('service')
@yield('employ')

<div data-am-widget="gotop" class="am-gotop am-gotop-fixed" style="position:fixed;right:50px;bottom:50px;background-color: #444444">
    <a href="#top" title="回到顶部">
        <span class="am-gotop-title">回到顶部</span>
        <i class="am-gotop-icon am-icon-chevron-up"></i>
    </a>
</div>

<!--end header-->




<footer class="footer">
    <ul>
        <li class="am-u-lg-4 am-u-sm-12">
            <div class="footer-title">联系我们</div>
            <div class="foot-span">
                <span>地址:{{$touchList['address']}}</span>
                <span>电话:{{$touchList['mobile']}}</span>
                <span>传真:{{$touchList['fax']}}</span>
                <span>邮箱:{{$touchList['email']}}</span>
            </div>
            <div class="footphone">
                <i class="am-icon-phone"></i>{{$touchList['fixphone']}}
            </div>
            <div class="hb-links"></div>
        </li>
        <li class="am-u-lg-4 am-u-sm-12">
            <div class="hb-link-title">相关链接</div>
            <div class="hb-link-detail">
                <ul class="foot-link-ul">
                    @foreach($allList as $li)
                        <li class="am-u-sm-4"><a href="{{$li['url']}}">{{$li['Cname']}}</a></li>
                        @endforeach
                    {{--<li class="am-u-sm-4"><a href="">解决方案</a></li>--}}
                    {{--<li class="am-u-sm-4"><a href="">产品展示</a></li>--}}
                    {{--<li class="am-u-sm-4"><a href="">客户案例</a></li>--}}
                    {{--<li class="am-u-sm-4"><a href="">解决方案</a></li>--}}
                    {{--<li class="am-u-sm-4"><a href="">产品展示</a></li>--}}
                    {{--<li class="am-u-sm-4"><a href="">客户案例</a></li>--}}
                    {{--<li class="am-u-sm-4"><a href="">客户案例</a></li>--}}
                    <li class="am-u-end"></li>
                    {{--<div class="clear"></div>--}}
                </ul>
            </div>

        </li>
        <div class="clear"></div>
    </ul>

</footer>


<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!--<![endif]-->
<script src="{{asset('js/amazeui.min.js')}}"></script>
<script src="{{asset('js/meiqia.js')}}"></script>

@stack('script')
<!--<script src="js/scroll.js"></script>-->
</body>
</html>

<!--TODO:响应式导航bug；客户案例-->