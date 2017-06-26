@extends('layouts.app')

@section('content')
    <h2>Add Another Meal</h2>
    <hr>

    <form method="post" action="{{ action('MealsController@store') }}" class="form-horizontal">
        <div class="form-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <label for="meal-name" class="col-sm-1 control-label">Name</label>
            <div class="col-sm-9">
                <input id="meal-name" name="name" class="form-control" type="text" placeholder="Meal Name">
            </div>
            <button type="submit" class="btn btn-primary col-sm-2">Add Meal</button>
        </div>
    </form>

@endsection

