@extends('home.common.layout')

@section('menu')
    <li ><a href="{{url('solution')}}">解决方案</a></li>
    <li><a href="{{url('product')}}">产品展示 </a></li>
    <li><a href="{{url('customer')}}">客户案例 </a></li>
    <li><a href="{{url('service')}}">服务中心 </a></li>
    <li class="hb-menu-active"><a href="{{url('news')}}">新闻动态 </a></li>
    <li><a href="{{url('about')}}">关于我们</a></li>
    <li><a href="{{url('employ')}}">招贤纳士 </a></li>

@endsection
@section('topic')
    @include('home.common.topic')
    @endsection
@section('news')

    <div class="hb-news-container">
        <div class="am-u-lg-9 am-sm-12 am-md-8 ">
            <div class="news-list">
                <div class="am-u-lg-4 am-u-sm-12">
                    <a href=""><div class="news-in">
                            <img src="../img/app1-1.png" class="am-img-responsive" alt="">
                            <span>召开年会通知</span>
                            <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
                            <a class="see-more-news" href="http://www.baidu.com">查看更多 <i class="am-icon-angle-double-right"></i></a>
                        </div>
                    </a>
                </div>
                <div class="am-u-lg-4 am-u-sm-12">
                    <a href=""><div class="news-in">
                            <img src="../img/app1-1.png" class="am-img-responsive" alt="">
                            <span>召开年会通知</span>
                            <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
                            <a class="see-more-news" href="http://www.baidu.com">查看更多 <i class="am-icon-angle-double-right"></i></a>
                        </div>
                    </a>
                </div>
                <div class="am-u-lg-4 am-u-sm-12">
                    <a href=""><div class="news-in">
                            <img src="../img/app1-1.png" class="am-img-responsive" alt="">
                            <span>召开年会通知</span>
                            <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
                            <a class="see-more-news" href="http://www.baidu.com">查看更多 <i class="am-icon-angle-double-right"></i></a>
                        </div>
                    </a>

                </div>
                <div class="am-u-lg-4 am-u-sm-12">
                    <a href=""><div class="news-in">
                            <img src="../img/app1-1.png" class="am-img-responsive" alt="">
                            <span>召开年会通知</span>
                            <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
                            <a class="see-more-news" href="http://www.baidu.com">查看更多 <i class="am-icon-angle-double-right"></i></a>
                        </div>
                    </a>
                </div>
                <div class="am-u-lg-4 am-u-sm-12">
                    <a href=""><div class="news-in">
                            <img src="../img/app1-1.png" class="am-img-responsive" alt="">
                            <span>召开年会通知</span>
                            <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
                            <a class="see-more-news" href="http://www.baidu.com">查看更多 <i class="am-icon-angle-double-right"></i></a>
                        </div>
                    </a>
                </div>
                <div class="am-u-lg-4 am-u-sm-12">
                    <a href=""><div class="news-in">
                            <img src="../img/app1-1.png" class="am-img-responsive" alt="">
                            <span>召开年会通知</span>
                            <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
                            <a class="see-more-news" href="http://www.baidu.com">查看更多 <i class="am-icon-angle-double-right"></i></a>
                        </div>
                    </a>

                </div>
                <!--<div class="am-pagination ">-->

            </div>
        </div>
        <div class="am-u-lg-3 am-u-sm-12 am-md-4 ">
            <div class="hb-news-rside">
                <ol class="am-breadcrumb am-breadcrumb-slash">
                    <li class="am-icon-thumbs-up"><a href="">热门新闻</a></li>
                    <li><a href="">Hot News</a></li>
                </ol>
            </div>
            <div class="news-toggle">
                <section data-am-widget="accordion" class="am-accordion am-accordion-gapped" data-am-accordion='{  }'>
                    <dl class="am-accordion-item am-active">
                        <dt class="am-accordion-title">
                            就这样恣意的活着
                        </dt>
                        <dd class="am-accordion-bd am-collapse am-in">
                            <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                            <div class="am-accordion-content">
                                置身人群中 <br/> 你只需要被淹没 享受 沉默 <br/> 退到人群后 <br/> 你只需给予双手 微笑 等候
                            </div>
                        </dd>
                    </dl>
                    <dl class="am-accordion-item">
                        <dt class="am-accordion-title">
                            让生命去等候，去等候，去等候，去等候
                        </dt>
                        <dd class="am-accordion-bd am-collapse ">
                            <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                            <div class="am-accordion-content">
                                走在忠孝东路 <br/> 徘徊在茫然中 <br/> 在我的人生旅途 <br/> 选择了多少错误 <br/> 我在睡梦中惊醒 <br/> 感叹悔言无尽 <br/> 恨我不能说服自己 <br/> 接受一切教训 <br/> 让生命去等候 <br/> 等候下一个漂流 <br/> 让生命去等候 <br/>等候下一个伤口
                            </div>
                        </dd>
                    </dl>
                    <dl class="am-accordion-item">
                        <dt class="am-accordion-title">
                            我就这样告别山下的家
                        </dt>
                        <dd class="am-accordion-bd am-collapse ">
                            <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                            <div class="am-accordion-content">
                                我就这样告别山下的家，我实在不愿轻易让眼泪留下。我以为我并不差不会害怕，我就这样自己照顾自己长大。我不想因为现实把头低下，我以为我并不差能学会虚假。怎样才能够看穿面具里的谎话？别让我的真心散的像沙。如果有一天我变得更复杂，还能不能唱出歌声里的那幅画？
                            </div>
                        </dd>
                    </dl>
                </section>

            </div>

        </div>
        <div class="clear"></div>
    </div>
    @endsection
