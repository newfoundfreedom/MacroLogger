@extends('layouts.app')

@section('content')

    <h2 class="meal-name">{{$meal->name}}</h2><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $meal->created_at->subHour(4)->format('g:i a \o\n l, F jS') }}</span>

    <br>
    <span class="label label-primary"> kCal</span>
    <span class="label label-default">g Protein</span>
    <span class="label label-default">g Carbohydrates</span>
    <span class="label label-default">g Fat</span>

    <hr>

@endsection
