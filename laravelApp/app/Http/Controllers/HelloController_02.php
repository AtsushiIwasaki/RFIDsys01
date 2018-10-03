<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body { font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これは、HelloコントローラのIndexアクションです</p>
    <a href="/hello/other">go to Other page</a>
</body>
</html>
EOF;
    }

    public function other() {
        return <<<EOF
<html>
<head>
<title>Hello/Other</title>
<style>
body { font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Other</h1>
    <p>これは、HelloコントローラのOtherアクションです</p>
    <a href="/hello">go to Index page</a>
</body>
</html>
EOF;
    }
}
