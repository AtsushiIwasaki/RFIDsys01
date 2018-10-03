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
    <table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
        </tr>
        @foreach ($people as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection