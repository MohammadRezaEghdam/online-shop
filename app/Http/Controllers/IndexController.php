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

    public function blog()
    {
        return view('blog');
    }
}