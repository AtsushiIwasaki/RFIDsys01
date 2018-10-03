<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
//    public function index() {
//        $count = ['one', 'two', 'three', 'four', 'five'];
//        return view('hello.index', ['data'=>$count]);
//    }
    public function index() {

        $data = [
            ['name'=>'山田太郎', 'mail'=>'taro@yamada'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@flower'],
            ['name'=>'鈴木さちこ', 'mail'=>'sachiko@happy'],
        ];
        return view('hello.index', ['data'=>$data] );
    }
}
