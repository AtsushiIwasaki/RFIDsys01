<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'山田たろう', 'mail'=>'taro@yamada'],
            ['name'=>'田中はなこ', 'mail'=>''hanako@flower'],
            ['name'=>'鈴木さちこ', 'mail'=>'sachiko@happy']
        ];
        return view('hello.index', ['data'=>$data]);
    }
//    public function index()
//    {
//        $data = ['one', 'two', 'three', 'four', 'five'];
//        return view('hello.index', ['data'=>$data]);
//    }
//    public function index()
//    {
//        return view('hello.index');
//    }
//    public function post(Request $request)
//    {
//        return view('hello.index', ['msg'=>$request->msg]);
//    }
//    public function index()
//    {
//        return view('hello.index', ['msg'=>'']);
//    }
//
//    public function post(Request $request)
//    {
//        return view('hello.index', ['msg'=>$request->msg]);
//    }

//    public function index()
//    {
//        $data = [
//            'msg'=>'お名前を入力してください',
//        ];
//        return view ('hello.index', $data);
//    }
//
//    public function post(Request $request)
//    {
//        $msg = $request->msg;
//        $data = [
//            'msg'=>'こんにちは、' . $msg . 'さん！',
//        ];
//        return view('hello.index', $data);
//    }

//    public function  index() {
//        $data = [
//            'msg'=>'これはBladeを利用したサンプルです',
//            ];
//        return view('hello.index', $data);
//    }
//    public function index(Request $request)
//    {
//        $data = [
//            'msg'=>'これはコントローラから渡されたメッセージです。',
//            'id'=>$request->id
//        ];
//        return view('hello.index', $data);
//    }

    //    public function index($id='zero')
//    {
//        $data = [
//            'msg'=>'これはコントローラから渡されたメッセージです。',
//            'id'=>$id
//        ];
//        return view('hello.index', $data);
//    }

//    public function index()
//    {
//        $data = ['msg'=>'これはコントローラから渡されたメッセージです。'];
//        return view('hello.index', $data);
//
//    }
//    public function index()
//    {
//        return view('hello.index');
//    }
//    public function index(Request $request, Response $response) {
//$html = <<<EOF
//<html>
//<head>
//<title>Hello/Index</title>
//<style>
//body {font-size:16px; color:#999; }
//h1 { font-size:120px; text-align:right; color:#fafafa;
//    margin:-50px 0px -120px 0px; }
//</style>
//</head>
//<body>
//    <h1>hello</h1>
//    <h3>Request</h3>
//    <pre>{$request}</pre>
//    <h3>Response</h3>
//    <pre>{$response}</pre>
//</body>
//</html>
//EOF;
//        $response->setContent($html);
//        return $response;
//    }
}


/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;

$head = '<html><head>';

$style = <<<EOF
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
    margin:-40px 0px -50px 0px; }
</style>
EOF;

$body = '</head><body>';

$end = '</body></head>';
*/
/*
class HelloController extends Controller
{
    public function __invoke() {
        return <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body { font-size:16pt; color:#999; }
h1 { font-size:30pt; text-align:right; color:#eee; margin:-15px 0px 0px 0px;}
</style>
</head>
<body>
    <h1>single Action</h1>
    <p>これはシングルアクションコントローラのアクションですa。</p>
</body>
</html>
EOF;
    }
}
*/

/*
function tag($tag, $txt) {
	return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
	public function index() {
		global $head, $style, $body, $end;

		$html = $head . tag('title', 'Hello/Index') . $style . $body
		. tag('h1', 'Index') . tag('p', 'thie is Index Page')
		. '<a href="/hello/other">go to Other page</a>'
		. $end;
		return $html;
	}

	public function other() {
		global $head, $style, $body, $end;
		
		$html = $head . tag('title', 'Hello/Other') . $style . 
			$body
			. tag('h1', 'Other') . tag('p', 'This is Other page')
			. $end;
		return $html;
	}
}
*/

/*
class HelloController extends Controller
{
	public function index($id='noname', $pass='unknown') {
		return <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
    margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これは、HelloコントローラのIndexアクションです。</p>
    <ul>
        <li>ID: {$id}</li>
        <li>PASS: {$pass}</li>
    </ul>
</body>
</html>
EOF;
    }
}
*/