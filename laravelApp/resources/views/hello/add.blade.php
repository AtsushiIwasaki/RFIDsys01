<!-- 親レイアウトを指定する -->
@extends('layouts.helloapp')

<!-- yield のところに文字を埋め込む -->
@section('title', 'Add')

<!-- 親レイアウトを表示して、続きに文字を入れる -->
@section('menubar')
    @parent
    新規作成ページ
@endsection

<!-- yield content のところに埋めるもの -->
@section('content')
    <table>
        <form action="/hello/add" method="post">
            {{ csrf_field() }}
            <tr>
                <th>name:</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>mail:</th>
                <td><input type="text" name="mail"</td>
            </tr>
            <tr>
                <th>age:</th>
                <td><input type="text" name="age"</td>
            </tr>
            <tr>
                <th>age:</th>
                <td><input type="submit" value="send"</td>
            </tr>
        </form>
    </table>
@endsection
@section('footer')
    copyright 2017 tuyano.
@endsection
