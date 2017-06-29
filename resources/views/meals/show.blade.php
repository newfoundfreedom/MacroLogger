@extends('layouts.app')

@section('content')

    <h2 class="meal-name">{{$meal->name}}</h2>
    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $meal->created_at->subHour(4)->format('l, F jS, Y') }}</span>

    <br>
    <span class="label label-primary"> kCal</span>
    <span class="label label-default">g Protein</span>
    <span class="label label-default">g Carbohydrates</span>
    <span class="label label-default">g Fat</span>

    <hr>
    <h3>Foods</h3>
    <p>No Foods associated with this meal. Add some below.</p>
    <hr>
    {{--<form method="post" action="{{ action('FoodsController@store') }}" class="form-horizontal"></form>--}}
    <form method="post" action="np" class="form-horizontal"></form>
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <div class="form-group row">
        <label for="food-name" class="col-sm-2 control-label">Food Name</label>
        <div class="col-sm-10">
            <input id="food-name" name="food" class="form-control" type="text" placeholder="Food Name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="protein" class="col-sm-2 control-label">Protein</label>
        <div class="col-sm-10">
            <input id="protein" name="pretein" class="form-control" type="text" placeholder="Protein/g" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="carbohydrates" class="col-sm-2 control-label">Carbohydrates</label>
        <div class="col-sm-10">
            <input id="carbohydrates" name="carbohydrates" class="form-control" type="text"
                   placeholder="Carbohydrates/g" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="fat" class="col-sm-2 control-label">Fat</label>
        <div class="col-sm-10">
            <input id="fat" name="fat" class="form-control" type="text" placeholder="Fat/g" required>
            <br>
            <button type="submit" class="btn btn-primary col-sm-2">Add Food</button>
        </div>
    </div>

@endsection
