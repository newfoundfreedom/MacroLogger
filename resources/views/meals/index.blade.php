@extends('layouts.app')

@section('content')
    {{--@if(Auth::user()->id == $meals->user_id)--}}
    <h4>All Meals</h4>
    <hr>
        @if(count($meals) > 0)
            <ul class="list-group">
                @foreach($meals as $meal)
                    <li class="list-group-item"><a href="/meals/{{$meal->id}}">{{$meal->name}}</a>
                        <span class="pull-right">{{ $meal->created_at->subHour(4)->format('g:i a \o\n l, F jS') }}</span>

                    </li>
                @endforeach
            </ul>
        @else
            <p>No Meals found</p>
        @endif
    {{--@endif--}}

@endsection
