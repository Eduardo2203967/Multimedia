<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function course(){
        return view(' course');
    }
    public function admission(){
        return view('admission');
    }
    public function contacts(){
        return view('contacts');
    }
    public function curricularPlan(){
        return view('curricularPlan');
    }
    public function moreInfo(){
        return view('moreInfo');
    }
    public function partnerships(){
        return view('partnerships');
    }
}
