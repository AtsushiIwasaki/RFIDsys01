@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection


@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
            <th></th>
            <th>Board</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->getData()}}</td>
                <td>
                    @if($item->board!=null)
                        {{$item->board->getData()}}
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection

