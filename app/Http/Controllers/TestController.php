<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    //
    public function  test()
    {
        if (View::exists('test')) {
//            return view('test',['name'=>'test1','age'=>12]);
            return view('test')->with(['name'=>'ll','age'=>12]);
        }else{
            return "<html><body><script type='text/javascript'>alert('the page not found!');</script></body></html>";
        }

    }
}
