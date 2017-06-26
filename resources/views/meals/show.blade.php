@extends('layouts.app')

@section('content')

    <h2 class="meal-name">{{$meal->name}}</h2><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$meal->created_at}}</span>
    <br>
    <span class="label label-primary"> kCal</span>
    <span class="label label-default">g Protein</span>
    <span class="label label-default">g Carbohydrates</span>
    <span class="label label-default">g Fat</span>

    <hr>

@endsection
