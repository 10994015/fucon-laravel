@extends('layouts.base')

@section('main')
<main class="travel">
    <div class="travel-banner">
        <div class="overlay"></div>
        <h1>無障礙包車旅遊</h1>
        <p>無障礙旅遊專線規劃，熊安穩帶您享受陽光、擁抱大自然，讓身心靈都健康。</p>
    </div>
    <section class="content">
        @foreach($travels as $travel)
        <div class="item">
            <div class="imgbox"><img src="/images/{{$travel['image']}}" alt=""></div>
            <h3>{{$travel['title']}}</h3>
            <p>
                @php echo $travel['content'] @endphp
            </p>
            <a href="/reserve">立即預約</a>
        </div>
        @endforeach
    </section>
</main>
@endsection