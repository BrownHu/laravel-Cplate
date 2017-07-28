@extends('home.common.layout')
@include('home.common.topic')

@section('menu')
    <li><a href="{{url('solution')}}">解决方案</a></li>
    <li><a href="{{url('product')}}">产品展示 </a></li>
    <li><a href="{{url('customer')}}">客户案例 </a></li>
    <li><a href="{{url('service')}}">服务中心 </a></li>
    <li><a href="{{url('news')}}">新闻动态 </a></li>
    <li class="hb-menu-active"><a href="{{url('about')}}">关于我们</a></li>
    <li><a href="{{url('employ')}}">招贤纳士 </a></li>

@endsection

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
        响应式修改，页面完整
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
            <li><i class="am-icon-map-marker"></i><span>{{$touchList['address']}}</span></li>
            <li><i class="am-icon-phone"></i><span>{{$touchList['fixphone']}}</span></li>
            <li><i class="am-icon-mobile"></i><span>{{$touchList['mobile']}}</span></li>
            <li><i class="am-icon-envelope-o"></i><span>{{$touchList['email']}}</span></li>
        </ul>
    </div>
@endsection
@push('script')
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=sFKiirQ0rIlZ6dHjNUBHxXM6D2Bi962a"></script>
<script src="{{asset('js/baiduMap.js')}}"></script>
@endpush