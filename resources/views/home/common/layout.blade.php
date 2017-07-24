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
                    <li class="hb-menu-active"><a href="{{url('solution')}}">解决方案</a></li>
                    <li><a href="{{url('product')}}">产品展示 </a></li>
                    <li><a href="{{url('customer')}}">客户案例 </a></li>
                    <li><a href="{{url('service')}}">服务中心 </a></li>
                    <li><a href="{{url('news')}}">新闻动态 </a></li>
                    <li><a href="{{url('about')}}">关于我们</a></li>
                    <li><a href="{{url('employ')}}">招贤纳士 </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div style="clear: both;">

    </div>
</header>
@yield('topic')
@yield('content')
@yield('solution')
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
                <span>地址:武汉市洪山区街道口鹏程国际B座2511</span>
                <span>电话:18238765101</span>
                <span>传真:(123) 456-7890</span>
                <span>邮箱:support@vectorlab.com</span>
            </div>
            <div class="footphone">
                <i class="am-icon-phone"></i>027-2323-232
            </div>
            <div class="hb-links"></div>
        </li>
        <li class="am-u-lg-4 am-u-sm-12">
            <div class="hb-link-title">相关链接</div>
            <div class="hb-link-detail">
                <ul class="foot-link-ul">
                    <li class="am-u-sm-4"><a href="">解决方案</a></li>
                    <li class="am-u-sm-4"><a href="">产品展示</a></li>
                    <li class="am-u-sm-4"><a href="">客户案例</a></li>
                    <li class="am-u-sm-4"><a href="">解决方案</a></li>
                    <li class="am-u-sm-4"><a href="">产品展示</a></li>
                    <li class="am-u-sm-4"><a href="">客户案例</a></li>
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
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=sFKiirQ0rIlZ6dHjNUBHxXM6D2Bi962a"></script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){
        map = new BMap.Map("map");
        map.centerAndZoom(new BMap.Point(116.966942,32.619657),15);
    }
    function setMapEvent(){
        map.enableScrollWheelZoom();
        map.enableKeyboard();
        map.enableDragging();
        map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
        target.addEventListener("click",function(){
            target.openInfoWindow(window);
        });
    }
    function addMapOverlay(){
        var markers = [
            {content:"淮南师范学院逸夫图书馆",title:"我们在这",imageOffset: {width:0,height:3},position:{lat:32.62355,lng:116.965864}}
        ];
        for(var index = 0; index < markers.length; index++ ){
            var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
            var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
            })});
            var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
            var opts = {
                width: 200,
                title: markers[index].title,
                enableMessage: false
            };
            var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
            marker.setLabel(label);
            addClickHandler(marker,infoWindow);
            map.addOverlay(marker);
        };
    }
    //向地图添加控件
    function addMapControl(){
        var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
        map.addControl(scaleControl);
        var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:1});
        map.addControl(navControl);
        var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
        map.addControl(overviewControl);
    }
    var map;
    initMap();
</script>
<!--<script src="js/scroll.js"></script>-->
</body>
</html>

<!--TODO:响应式导航bug；客户案例-->