@extends('home.common.layout')
@section('menu')
    <li ><a href="{{url('solution')}}">解决方案</a></li>
    <li ><a href="{{url('product')}}">产品展示 </a></li>
    <li><a href="{{url('customer')}}">客户案例 </a></li>
    <li class="hb-menu-active"><a href="{{url('service')}}">服务中心 </a></li>
    <li><a href="{{url('news')}}">新闻动态 </a></li>
    <li><a href="{{url('about')}}">关于我们</a></li>
    <li><a href="{{url('employ')}}">招贤纳士 </a></li>

@endsection
@section('topic')
    @include('home.common.topic')
@endsection
@section('service')
    <div class="hb-service-center">
        <div class="am-u-lg-9 am-u-sm-12 service-text ">
            <span>Android应用程序开发</span>
            <p>据统计，2013年，Android全球市场份额达到了78.6%，而中国市场也达到了78%。在移动操作市场，Android已经成为不可动摇的王者。 针对目前Android平台日益严重的碎片化问题，我们提供了多种解决方案，针对不同的系统版本，设备型号和设备分辨率，我们提供了全面 的兼容性测试。同时，我们为客户的App提供了多平台发布服务，包括Google play，亚马逊应用商店，91，应用汇，机锋网等等多个平台， 努力让更多的用户可以下载到。</p>
        </div>
        <div class="am-u-lg-3 am-sm-12 service-img">
            <img src="../img/website.png" alt="" class="am-img-responsive">
        </div>
        <hr data-am-widget="divider" style="" class="am-divider am-divider-default service-hr" />
        <div class="am-u-lg-9 am-u-sm-12 service-text ">
            <span>IOS(iPhone、iPad、Mac os)应用程序开发</span>
            <p>虽然Android的市场份额是绝对的王者，但是在高端手机市场领域，IOS同样成为市场的主导者。据统计，2013年，IOS全球市场份额达到 了17.6%。虽然Android市场份额要比IOS要高，在细分领域，比如教育市场、企业市场、高端市场等，IOS是绝对的王者。我们服务的客户 超过30家，他们来自不同的行业，包括房地产，服务，医疗等等。迄今为止已为客户开发了超过30款ios应用程序，其中有10款是iPad应用 程序，目前上架运营的超过20款。我们紧随时代潮流，将最新的设计理念和技术应用到项目中。</p>
        </div>
        <div class="am-u-lg-3 am-sm-12 service-img">
            <img src="../img/android.png" alt="" class="am-img-responsive">
        </div>
        <hr data-am-widget="divider" style="" class="am-divider am-divider-default service-hr" />
        <div class="am-u-lg-9 am-u-sm-12 service-text ">
            <span>微信公众平台开发</span>
            <p>具腾讯官方统计，目前微信月活跃用户达到了3亿，其中海外用户更是达到了4千万。随着微信用户的不断增加，腾讯对其微信产品：公众平 台帐号的不断投入与推广，对于企业客户来说，拥有一款微信公众平台产品比拥有一个企业官方网站更重要。我们不但致力于高品质App的开 发，而且在微信公众平台二次开发方面拥有优秀开发人才和市场推广经验。迄今为止，我们已经为数十家企业开发了微信公众平台帐号。客户 可以结合微信公众平台，更好得去运营App平台和网站，不但提高了用户的数量，而且更好得拉近了与用户的距离。</p>
        </div>
        <div class="am-u-lg-3 am-sm-12 service-img">
            <img src="../img/ios.png" alt="" class="am-img-responsive">
        </div>
        <hr data-am-widget="divider" style="" class="am-divider am-divider-default service-hr" />
        <div class="am-u-lg-9 am-u-sm-12 service-text ">
            <span>服务器接口开发</span>
            <p>无论ios平台、android平台、windows phone平台还是微信公众帐号平台，要想保持程序运行的稳定性、即时性，必须要有一个优良的服 务器平台作为支撑。我们为客户提供了全球领先的服务器开发语言PHP和JAVA。根据客户的不同需求选择不同的开发语言，我们的服务器接 口性能优良，支持十万百万级的用户并发量。</p>
        </div>
        <div class="am-u-lg-3 am-sm-12 service-img">
            <img src="../img/wechat.png" alt="" class="am-img-responsive">
        </div>
        <div class="clear"></div>

    </div>
@endsection