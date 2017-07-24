@extends('home.common.layout')
@include('home.common.topic')

@section('about')

    <div class="about-us">
        <div class="about-wrap">
            <div class="top">
                <i class="am-icon-paper-plane"></i><span>关于恒望</span>
                <p>About HengWang</p>
            </div>
            <div class="about-company-intro">
                <p>
                    天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营流网络信息化的实在营运解决</p>
                <p>天公路货运管理系统是华天软件为物流货运企业天软件为物流货运企业全力打造的一套物流网络信息化的实在营流网络信息化的实在营运解决</p>
                <p>天公路货运管理系统是华天软件为物流货运企业天软件为物流货运企业流网络信息化的实在营运解决</p>
                <p>
                    天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营流网络信息化的实在营运解决</p>
            </div>
        </div>
    </div>
    <div class="thought-intro gray-li">
        <div class="thought-wrap">
            <ul class="am-avg-sm-3">
                <li>
                    <div class="content-out">
                        <div class="content">
                            <i class="am-icon-circle-o-notch"></i>
                            <p>企业理念</p>
                            <div class="hide">
                                <p class="hidep">专注 专业</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="content-out">
                        <div class="content">
                            <i class="am-icon-hand-o-right"></i>
                            <p>服务理念</p>
                            <div class="hide">
                                <p class="hidep">实务 用心</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="content-out">
                        <div class="content">
                            <i class="am-icon-bar-chart"></i>
                            <p>发展方向</p>
                            <div class="hide">
                                <p class="hidep">精益 求精</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="office-env">
        <div class="env-title">
            <i class="am-icon-home"></i>
            <span>办公环境</span>
            <p>Office Space</p>
        </div>
        <div class="office-pic am-g">
            <div class="am-u-lg-6 am-u-sm-12">
                <img src="../img/space-1.png" class="am-img-responsive" >
            </div>
            <div class="am-u-sm-6 am-u-lg-3">
                <img src="../img/space-2.png" class="am-img-responsive" >
            </div>
            <div class="am-u-sm-6 am-u-lg-3">
                <img src="../img/space-3.png" alt="" class="am-img-responsive">
            </div>
            <div class="am-u-sm-6 am-u-lg-3">
                <img src="../img/space-4.png" alt="" class="am-img-responsive">
            </div>
            <div class="am-u-sm-6 am-u-lg-3">
                <img src="../img/space-5.png" alt="" class="am-img-responsive">
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="contact-us">
        <div class="contact-title">
            <i class="am-icon-comment-o"></i>
            <span>联系我们</span>
            <p>Contact Us</p>
        </div>

    </div>
    <div class="contact-info gray-li am-g">
        <div class="am-u-lg-6 am-u-sm-12">
            <div class="inner-map" id="map"></div>
        </div>
        <ul  class="am-u-lg-6 am-u-sm-12">
            <li><i class="am-icon-map-marker"></i><span>安徽省淮南市田家庵区泉山路</span></li>
            <li><i class="am-icon-phone"></i><span>0554-3162-3162</span></li>
            <li><i class="am-icon-mobile"></i><span>13215543162</span></li>
            <li><i class="am-icon-envelope-o"></i><span>crazycodeonfinger@163.com</span></li>
        </ul>
    </div>
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
@endsection