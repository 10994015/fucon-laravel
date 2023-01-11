<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $services = [
            ['image' => 'banner.png', 'title' => '輪椅接送', 'intro' => 'The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to', 'link' => '#'],
            ['image' => 'banner.png', 'title' => '爬梯服務', 'intro' => 'The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to', 'link' => '#'],
            ['image' => 'banner.png', 'title' => '包車旅遊', 'intro' => 'The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to', 'link' => '/travel'],
        ];
        $teams = [
            [
                'image' => 'team1.png',
                'area' => '台北地區',
                'name' => '章勳凱',
                'phonetitle'=>'#0937',
                'phone' => '0912345678',
                'car' => '福特旅行家  8人座',
                'line' => '#'
            ],
            [
                'image' => 'team1.png',
                'area' => '台北地區',
                'name' => '章勳凱',
                'phonetitle'=>'#0937',
                'phone' => '0912345678',
                'car' => '福特旅行家  8人座',
                'line' => '#'
            ],
            [
                'image' => 'team1.png',
                'area' => '台北地區',
                'name' => '章勳凱',
                'phonetitle'=>'#0937',
                'phone' => '0912345678',
                'car' => '福特旅行家  8人座',
                'line' => '#'
            ],
            [
                'image' => 'team1.png',
                'area' => '台北地區',
                'name' => '章勳凱',
                'phonetitle'=>'#0937',
                'phone' => '0912345678',
                'car' => '福特旅行家  8人座',
                'line' => '#'
            ],
        ];
        $comments = [
            ['comment' => '好棒!!!值得再回來坐一次', 'name' => '陳小姐'],
            ['comment' => '好棒!!!值得再回來坐一次', 'name' => '陳小姐'],
            ['comment' => '好棒!!!值得再回來坐一次', 'name' => '陳小姐'],
            ['comment' => '好棒!!!值得再回來坐一次', 'name' => '陳小姐'],
        ];
        return view('home', ['services'=>$services, 'teams'=>$teams, 'comments'=>$comments]);
    }
}
