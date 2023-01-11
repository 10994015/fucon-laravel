<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TollController extends Controller
{
    public function index(){
        return view('toll');
    }
}
