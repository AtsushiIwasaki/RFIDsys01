<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index() {
        $count = ['one', 'two', 'three', 'four', 'five'];
        return view('hello.index', ['data'=>$count]);
    }
}
