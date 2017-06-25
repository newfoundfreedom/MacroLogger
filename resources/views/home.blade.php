@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{config('app.name', "My Fitness Buddy")}}</h1>
        <p>Welcome - Login to record your daily intake and track your macronutrient statistics.</p>
        <p>
            <a><button class="btn btn-primary btn-lg" href="/login">Login</button></a>
            <a><button class="btn btn-success btn-lg" href="/signup">Sign Up</button></a>
        </p>
    </div>
    {{--<h1>{{$title}}</h1>--}}
    {{--<ul class="list-group">--}}
        {{--@if(count($macros) > 0)--}}
            {{--@foreach($macros as $macro)--}}
            {{--<li class="list-group-item">{{$macro}}</li>--}}
            {{--@endforeach--}}
        {{--@endif--}}
    {{--</ul>--}}
@endsection