@extends('layouts.base')

@section('main')
<main class="toll">
    <div class="toll-banner">
        <div class="overlay"></div>
        <h1>收費標準</h1>
        <p>價格公開透明 童叟無欺</p>
    </div>
    <div class="intro">
        <div class="item">
            <h3>無障礙收費標準</h3>
            <h4>價格公開透明 童叟無欺</h4>
            <p>熊安穩無障礙計程車，輪椅接送採用包車制，服務地區包含：台北、新北、桃園、基隆、新竹，適合長期復健、洗腎等行動不便，需要輪椅接送者，低收入戶另享優惠。</p>
        </div>
        <div class="item">
            <h3>什麼是包車？</h3>
            <h4>僅服務一組乘客 不會與他人共乘</h4>
            <p>司機會於指定時間到達接送點，時間有彈性、可調整，看診沒壓力。看診後回程保証有車，隨時預留車輛，來電後30分鐘內為您接送。（包車價格內含：錶跳金額 + 司機移動 + 停等費用）</p>
        </div>
    </div>

    <div class="content">
        <h3>爬梯機單次服務費</h3>
        <p>爬梯機上下樓單次服務費</p>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">樓層</th>
                <th scope="col">價格</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>公寓2F</td>
                <td>每次700元</td>
                </tr>
                <tr>
                <td>公寓3F</td>
                <td>每次800元</td>
                </tr>
                <tr>
                <td>公寓4F</td>
                <td>每次900元</td>
                </tr>
                <tr>
                <td>公寓5F</td>
                <td>每次1000元</td>
                </tr>
            </tbody>
            </table>
    </div>
    <div class="content">
        <h3 class="love">長照2.0一般戶服務費（新北/台北）</h3>
        <p>爬梯機上下樓單次服務費</p>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">樓層</th>
                <th scope="col">價格</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>公寓2F</td>
                <td>每次310元</td>
                </tr>
                <tr>
                <td>公寓3F</td>
                <td>每次310元</td>
                </tr>
                <tr>
                <td>公寓4F</td>
                <td>每次410元</td>
                </tr>
                <tr>
                <td>公寓5F</td>
                <td>每次510元</td>
                </tr>
            </tbody>
            </table>
    </div>
    <div class="other">
        <div class="precautions">
            <h3>注意事項</h3>
            <p>單次 = 爬梯機上樓 或下樓<br>
            （上樓 + 下樓 各1次 = 2次）<br><br>
            兩地接送車資以 跳錶 計費<br>
            看診時間 不計費<br><br>
            限定體重 85公斤 以下<br>
            樓梯 5階以內免費 服務<br><br>
            請先確認樓梯空間符合爬梯機</p>
            <a href="/reserve">立即預約</a>
        </div>
        <div class="precautions">
            <h3>旅遊包車服務</h3>
            <p>大台北地區輪椅旅遊景點<br>
            車種：福斯Caddy / 納智捷<br>
            乘客：4位一般座+1位輪椅<br>
            半日遊 (4h) 車資：2,800元<br>
            一日遊 (8h) 車資：5,600元<br><br>
            車種：福斯T4 / 福特旅行家<br>
            乘客：5位一般座+1位輪椅<br>
            半日遊 (4h) 車資：3,200元<br>
            一日遊 (8h) 車資：6,400元</p>
            <a href="/reserve">立即預約</a>
        </div>
    </div>
</main>
@endsection