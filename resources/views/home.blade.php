@extends('layouts.base')

@section('banner')
<section class="banner">
    <div class="text">
        <h1 >復康<span>愛</span>接送&nbsp;</h1>
        <h2 data-text="barrier free transportation service&nbsp;">barrier free transportation service</h2>
    </div>
</section>
@endsection

@section('main')
<section class="infomation">
    <div class="item">
        <i class="fa-solid fa-phone"></i>
        <div>
            <p class="servicename">電話諮詢</p>
            <P>0900000000</P>
        </div>
    </div>
    <div class="item">
        <i class="fa-solid fa-clock"></i>
        <div>
            <p class="servicename">服務時間</p>
            <P>AM 08:00 - PM 08:00</P>
        </div>
    </div>
    <div class="item">
        <i class="fa-solid fa-location-dot"></i>
        <div>
            <p class="servicename">服務地址</p>
            <P>桃園市龍潭區龍潭街110號</P>
        </div>
    </div>
</section>

<section class="about">
    <h2 class="title">我們的服務</h2>
    <p class="e-title">What We Can Do For You</p>
    <div class="content">
        @foreach ($services as $service)
        <div class="item">
            <img src="./images/{{$service['image']}}" alt="">
            <h3>{{$service['title']}}</h3>
            <p>{{$service['intro']}}</p>
            <a href="{{$service['link']}}">查看更多</a>
        </div>
        @endforeach
    </div>
</section>

<section class="about-company">
    <h2 class="title">團隊成員</h2>
    <p class="small-title">復康愛接送均為經專業訓練且取得合格認證之司機，以耐心與專業協助輪椅之行動不便者或行動遲緩之長輩上下車，獲得許多客戶口碑推薦！</p>
    <div class="teams">
        @foreach ($teams as $team)
        <div class="team">
            <img src="/images/{{$team['image']}}" alt="">
            <div class="info">
                {{$team['area']}}<br>
                {{$team['name']}} {{$team['phonetitle']}}<br>
                電話 {{$team['phone']}}
            </div>
        </div>
        @endforeach
    </div>
    <a href="#">查看更多詳細資訊</a>
</section>

<section class="comment">
    <div class="text">
        <h3>客戶評價</h3>
        <p>我們的客戶怎麼說！</p>
        <div class="commentlist">
            @foreach ($comments as $comment)
            <div class="item">
                <p>{{$comment['comment']}}</p>
                <div class="client">
                    <p>-{{$comment['name']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <a href="/reserve">立即預約</a>

</section>
@endsection

@push('scripts')
<script>
    $('.commentlist').slick({
        infinite: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });
</script>
@endpush