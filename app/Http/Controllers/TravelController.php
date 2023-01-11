<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index(){
        $travels = [
                ['image' => 'RWD16_20_2.jpg', 'title' => '台中 武陵農場 賞花趣', 'content' => '萬株櫻花樹盛開<br>台灣最壯觀的櫻花林<br>花期為二月中至二月底'],
                ['image' => 'RWD16_20_2.jpg', 'title' => '台中 武陵農場 賞花趣', 'content' => '萬株櫻花樹盛開<br>台灣最壯觀的櫻花林<br>花期為二月中至二月底'],
                ['image' => 'RWD16_20_2.jpg', 'title' => '台中 武陵農場 賞花趣', 'content' => '萬株櫻花樹盛開<br>台灣最壯觀的櫻花林<br>花期為二月中至二月底'],
                ['image' => 'RWD16_20_2.jpg', 'title' => '台中 武陵農場 賞花趣', 'content' => '萬株櫻花樹盛開<br>台灣最壯觀的櫻花林<br>花期為二月中至二月底'],
                ['image' => 'RWD16_20_2.jpg', 'title' => '台中 武陵農場 賞花趣', 'content' => '萬株櫻花樹盛開<br>台灣最壯觀的櫻花林<br>花期為二月中至二月底'],
                ['image' => 'RWD16_20_2.jpg', 'title' => '台中 武陵農場 賞花趣', 'content' => '萬株櫻花樹盛開<br>台灣最壯觀的櫻花林<br>花期為二月中至二月底'],
        ];
        return view('travel', ['travels'=>$travels]);
    }
}
