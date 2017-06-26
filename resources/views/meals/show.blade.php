@extends('layouts.app')

@section('content')

    <h2>{{$meal->name}}</h2><span class="">{{$meal->created_at}}</span>
    <br>
    <span class="label label-primary"> kCal</span>
    <span class="label label-default">g Protein</span>
    <span class="label label-default">g Carbohydrates</span>
    <span class="label label-default">g Fat</span>

    <hr>

@endsection
