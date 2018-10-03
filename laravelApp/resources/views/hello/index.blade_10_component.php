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

    @component('components.message')
        
        @slot('msg_title')
        CAUTION!!
        @endslot

        @slot('msg_content')
        これはメッセージの表示です★
        @endslot
    @endcomponent

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection