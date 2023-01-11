@extends('layouts.base')

@section('main')
<main class="reserve">
    <section class="intro">
        <div class="left">
            <h1>如何預約接送？</h1>
            <h2>How to make an appointment for pickup?</h2>
            <a href="#about-teams" class="viewmore">預約司機</a>
        </div>
        <div class="center">
            <div class="item">
                <h3>提前多久預約？</h3>
                <p>若已知用車日期及時間，請於1～2天前預約。</p>
            </div>
            <div class="item">
                <h3>當日臨時用車</h3>
                <p>請至少提前1～2小時預約。</p>
            </div>
            <div class="item">
                <h3>就醫回程預約</h3>
                <p>看診後若需要預約回程接送，請至少提前40分鐘預約。大約在完成看診走出診療室後，等護士給單，還未批價及領藥之前。</p>
            </div>
            <div class="item">
                <h3>出院預約</h3>
                <p>若醫生通知可以出院，就可先預約。當天辦理出院手續時，請先聯絡我們，熊安穩會安排司機於1小時後抵達現場接送。</p>
            </div>
        </div>
       
    </section>
    <section class="about-teams" id="about-teams">
        <h2 class="title">復康愛接送合格司機</h2>
        <div class="teams">
            @foreach($teams as $team)
            <div class="team">
                <img src="/images/{{$team['image']}}" alt="">
                <div class="info">
                    專職{{$team['area']}}<br>
                    {{$team['name']}} {{$team['phonetitle']}}<br>
                    電話 {{$team['phone']}}<br>
                    {{$team['car']}}
                    <a href="{{$team['line']}}">加LINE好友立即預約</a>
                </div>
            </div>
           @endforeach
        </div>
    </section>
</main>
@endsection