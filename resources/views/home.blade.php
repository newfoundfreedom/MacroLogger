@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        @if(count($meals) > 0)
                            <p>Here's what you've eaten today.</p>
                            <ul class="list-group">
                                @foreach($meals as $meal)
                                    <li class="list-group-item"><a href="/meals/{{ $meal->id }}">{{ $meal->name }}</a><span
                                                class="pull-right">{{ $meal->created_at->subHour(4)->format('g:i a') }}</span></li>
                                @endforeach
                            </ul>
                            <p>Why not <a href="meals/create">keep track of your next meal</a>, too?</p>
                        @else
                            <p>Looks like you haven't eaten anything today. <a href="/meals/create"> You should change
                                    that.</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
