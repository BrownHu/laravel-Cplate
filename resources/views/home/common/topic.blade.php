
<div class="hb-topic">
    <div class="hb-topic-left ">
        <i class="am-icon-dropbox"></i>
        <span>{{$topic->Cname or "解决方案"}}</span>
        <p>{{$topic->Ename or "Solution Case"}}</p>
    </div>
    <div class="hb-topic-right">
        <span><a href="/">首页</a></span>
        <i class="am-icon-arrow-circle-right"></i>
        <span><a href="{{$topic->url or "/"}}">{{$topic->Cname or "解决方案"}}</a></span>
    </div>
</div>