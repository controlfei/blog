<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //首页控制器
    public function index()
    {

        return view('index/index');
    }
}
