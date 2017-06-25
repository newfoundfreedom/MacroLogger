@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <ul class="list-group">
        @if(count($macros) > 0)
            @foreach($macros as $macro)
            <li class="list-group-item">{{$macro}}</li>
            @endforeach
        @endif
    </ul>
@endsection