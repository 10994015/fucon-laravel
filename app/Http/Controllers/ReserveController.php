<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index(){
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
        return view('reserve', ['teams'=>$teams]);
    }
}
