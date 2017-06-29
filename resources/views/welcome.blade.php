@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron text-center">
                <h1>Welcome to {{config('app.name', 'MacroLogger')}}</h1>
                <p>A free calorie counter to help you monitor your daily intake</p>
                <a href="/login"><button class="btn btn-primary">Login</button></a>
                <a href="/register"><button class="btn btn-success">Sign Up</button></a>
            </div>
        </div>
    </div>
@endsection
