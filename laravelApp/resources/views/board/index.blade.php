{{--@extends('layouts.helloapp')--}}

{{--@section('title', 'Board.index')--}}

{{--@section('menubar')--}}
    {{--@parent--}}
    {{--ボード・ページ--}}
{{--@endsection--}}

{{--@section('content')--}}
    {{--<table>--}}
        {{--<tr><th>Data</th></tr>--}}
        {{--@foreach ($items as $item)--}}
            {{--<tr>--}}
                {{--<td>{{$item->getData()}}</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
    {{--</table>--}}
{{--@endsection--}}

{{--@section('footer')--}}
    {{--copyright 2017 tuyanio.--}}
{{--@endsection--}}

@section('content')
    <table>
        <tr>
            <th>Person</th>
            <th>Board</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
            @if ($item->boards != null)
                <table width="100%">
                    @foreach ($item->boards as $obj)
                    <tr>
                        <td>{{$obj->getData()}}</td>
                    </tr>
                    @endforeach
                </table>
            @endif
            </td>
        </tr>
        @endforeach
    </table>