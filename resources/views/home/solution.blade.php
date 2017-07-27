@extends('home.common.layout')
@section('menu')
    <li class="hb-menu-active"><a href="{{url('solution')}}">解决方案</a></li>
    <li ><a href="{{url('product')}}">产品展示 </a></li>
    <li><a href="{{url('customer')}}">客户案例 </a></li>
    <li><a href="{{url('service')}}">服务中心 </a></li>
    <li><a href="{{url('news')}}">新闻动态 </a></li>
    <li><a href="{{url('about')}}">关于我们</a></li>
    <li><a href="{{url('employ')}}">招贤纳士 </a></li>

@endsection
@section('topic')
    @include('home.common.topic')
@endsection
@section('solution')
    <div data-am-widget="tabs"
         class="am-tabs am-tabs-d2"
    >
        <ul class="am-tabs-nav am-cf hb-solution-ul">
            <li class="am-active solution-li-1"><a href="[data-tab-panel-0]">
                    <i class="am-icon-desktop"></i>
                    <span class="am-show-md-up">网站解决方案</span>
                </a></li>
            <li class="solution-li-2"><a href="[data-tab-panel-1]">
                    <i class="am-icon-mobile-phone"></i>
                    <span class="am-show-md-up">网站解决方案</span>
                </a></li>
            <li class="solution-li-3"><a href="[data-tab-panel-2]">
                    <i class="am-icon-desktop"></i>
                    <span class="am-show-md-up">网站解决方案</span>
                </a></li>
            <li class="solution-li-4"><a href="[data-tab-panel-3]">
                    <i class="am-icon-mobile"></i>
                    <span class="am-show-md-up">网站解决方案</span>
                </a></li>
        </ul>
        <div class="am-tabs-bd  solutions-tabs-content " >
            <div data-tab-panel-0 class="am-tab-panel am-active">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default" >

                    <div class="am-list-news-bd">
                        <ul class="am-list hb-solution-list">
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="#" class="">
                                        <img src="../img/app3.png"  alt="我很囧，你保重....晒晒旅行中的那些囧！"/ >
                                    </a>
                                </div>

                                <div class=" am-u-sm-8 am-list-main">
                                    <h3 class="am-list-item-hd"><a href="#" class="">优悦解决方案</a></h3>

                                    <div class="am-list-item-text">华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪</div>

                                </div>
                            </li>
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="#" class="">
                                        <img src="../img/app1.png" alt="我最喜欢的一张画"/>
                                    </a>
                                </div>

                                <div class=" am-u-sm-8 am-list-main">
                                    <h3 class="am-list-item-hd"><a href="#" class="">我最喜欢的一张画</a></h3>

                                    <div class="am-list-item-text">你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片美我最喜欢的画群296795413进群发画，少说多发图，</div>

                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            <div data-tab-panel-1 class="am-tab-panel ">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default" >

                    <div class="am-list-news-bd">
                        <ul class="am-list hb-solution-list">

                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="#" class="">
                                        <img src="../img/app1.png" alt="我最喜欢的一张画"/>
                                    </a>
                                </div>

                                <div class=" am-u-sm-8 am-list-main">
                                    <h3 class="am-list-item-hd"><a href="#" class="">我最喜欢的一张画</a></h3>

                                    <div class="am-list-item-text">你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片美我最喜欢的画群296795413进群发画，少说多发图，</div>

                                </div>
                            </li>
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="#" class="">
                                        <img src="../img/app3.png"  alt="我很囧，你保重....晒晒旅行中的那些囧！"/ >
                                    </a>
                                </div>

                                <div class=" am-u-sm-8 am-list-main">
                                    <h3 class="am-list-item-hd"><a href="#" class="">优悦解决方案</a></h3>

                                    <div class="am-list-item-text">华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪</div>

                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div data-tab-panel-2 class="am-tab-panel ">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default" >

                    <div class="am-list-news-bd">
                        <ul class="am-list hb-solution-list">
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="#" class="">
                                        <img src="../img/app3.png"  alt="我很囧，你保重....晒晒旅行中的那些囧！"/ >
                                    </a>
                                </div>

                                <div class=" am-u-sm-8 am-list-main">
                                    <h3 class="am-list-item-hd"><a href="#" class="">优悦解决方案</a></h3>

                                    <div class="am-list-item-text">华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪</div>

                                </div>
                            </li>
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="#" class="">
                                        <img src="../img/app1.png" alt="我最喜欢的一张画"/>
                                    </a>
                                </div>

                                <div class=" am-u-sm-8 am-list-main">
                                    <h3 class="am-list-item-hd"><a href="#" class="">我最喜欢的一张画</a></h3>

                                    <div class="am-list-item-text">你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片美我最喜欢的画群296795413进群发画，少说多发图，</div>

                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div data-tab-panel-3 class="am-tab-panel ">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default" >

                    <div class="am-list-news-bd">
                        <ul class="am-list hb-solution-list">

                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="#" class="">
                                        <img src="../img/app1.png" alt="我最喜欢的一张画"/>
                                    </a>
                                </div>

                                <div class=" am-u-sm-8 am-list-main">
                                    <h3 class="am-list-item-hd"><a href="#" class="">我最喜欢的一张画</a></h3>

                                    <div class="am-list-item-text">你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片美我最喜欢的画群296795413进群发画，少说多发图，</div>

                                </div>
                            </li>
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="#" class="">
                                        <img src="../img/app3.png"  alt="我很囧，你保重....晒晒旅行中的那些囧！"/ >
                                    </a>
                                </div>

                                <div class=" am-u-sm-8 am-list-main">
                                    <h3 class="am-list-item-hd"><a href="#" class="">优悦解决方案</a></h3>

                                    <div class="am-list-item-text">华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪</div>

                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection