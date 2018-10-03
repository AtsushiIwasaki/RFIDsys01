<!-- 親レイアウトを指定 -->
@extends('layouts.helloapp')

<!-- titleという名前のセクションに、indexというテキスト値を設定する-->
@section('title', 'aiueo')

<!-- 親レイアウトに'menubar'というyieldがあれば、そこにはめ込まれて表示される-->
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>必要なだけ記述できます。</p>

    @include('components.message',
              ['msg_title' => 'OK', 'msg_content'=>'サブビューです'])
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection