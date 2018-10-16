@extends('master')
@section('content')
    <form class="form-inline my-2 my-lg-0" action='/search'>
        <input class="form-control mr-sm-2" type="search" name="s" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    @foreach($units as $unit)
        <p>
        <h3>{{$unit->name}}</h3>
        <h6> {{$unit->boss_id}}
            {{$unit->position}}</h6>
        </p>
    @endforeach
@endsection