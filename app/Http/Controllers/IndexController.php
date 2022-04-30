<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use view;

class IndexController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function shop()
    {
        return view('shop');
    }

    public function blog()
    {
        return view('blog');
    }

    public function panel()
    {
        return view('panel');
    }
}
