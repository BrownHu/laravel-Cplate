@extends('home.common.layout')

@section('menu')
    <li ><a href="{{url('solution')}}">解决方案</a></li>
    <li class="hb-menu-active"><a href="{{url('product')}}">产品展示 </a></li>
    <li><a href="{{url('customer')}}">客户案例 </a></li>
    <li><a href="{{url('service')}}">服务中心 </a></li>
    <li><a href="{{url('news')}}">新闻动态 </a></li>
    <li><a href="{{url('about')}}">关于我们</a></li>
    <li><a href="{{url('employ')}}">招贤纳士 </a></li>

@endsection
@section('topic')
    @include('home.common.topic')
    @endsection
@section('product')
    <div class="hb-main-content am-g" style="">
        <div class="am-u-sm-12 am-u-lg-6 hb-about-wrap">
            <div class="about-title">
                <p>模板商城</p>
                <span class="am-badge am-badge-primary am-radius am-text-lg">网站建设</span>
            </div>
            <div class="about-address">
                <p><i class="am-icon-dribbble"></i>查看地址</p>
                <p><a href="">http://www.hwshop.com</a></p>
            </div>
            <div class="about-introduce">
                <p><i class="am-icon-tasks"></i>详情介绍</p>
                <span>一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需购买专门的服务器硬件、无需专业的IT人员进行维护， 只要打开浏览器，登录网站，即可使用在线物流软件。</span>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-lg-6">
            <div>
                <img src="../img/product2.png" alt="" class="am-img-responsive">
            </div>
        </div>
    </div>
    <!--second-->
    <div class="hb-main-content am-g gray-li">
        <div class="am-u-sm-12 am-u-lg-6">
            <div>
                <img src="../img/product1.png" alt="" class="am-img-responsive">
            </div>
        </div>
        <div class="am-u-sm-12 am-u-lg-6 hb-about-wrap">
            <div class="about-title">
                <p>模板商城</p>
                <span class="am-badge am-badge-primary am-radius am-text-lg">网站建设</span>
            </div>
            <div class="about-address">
                <p><i class="am-icon-dribbble"></i>查看地址</p>
                <p><a href="">http://www.hwshop.com</a></p>
            </div>
            <div class="about-introduce">
                <p><i class="am-icon-tasks"></i>详情介绍</p>
                <span>一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需购买专门的服务器硬件、无需专业的IT人员进行维护， 只要打开浏览器，登录网站，即可使用在线物流软件。</span>
            </div>
        </div>

    </div>
    <!--third-->
    <div class="hb-main-content am-g">
        <div class="am-u-sm-12 am-u-lg-6 hb-about-wrap">
            <div class="about-title">
                <p>模板商城</p>
                <span class="am-badge am-badge-primary am-radius am-text-lg">网站建设</span>
            </div>
            <div class="about-address">
                <p><i class="am-icon-dribbble"></i>查看地址</p>
                <p><a href="">http://www.hwshop.com</a></p>
            </div>
            <div class="about-introduce">
                <p><i class="am-icon-tasks"></i>详情介绍</p>
                <span>一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需购买专门的服务器硬件、无需专业的IT人员进行维护， 只要打开浏览器，登录网站，即可使用在线物流软件。</span>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-lg-6">
            <div>
                <img src="../img/product2.png" alt="" class="am-img-responsive">
            </div>
        </div>
    </div>


@endsection