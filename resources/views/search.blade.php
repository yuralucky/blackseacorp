@extends('master')
@section('content')
  <h1>Result</h1>
    @foreach($search as $unit)
        <p>
        <h3>{{$unit->name}}</h3>
        <h6> {{$unit->boss_id}}
            {{$unit->position}}</h6>
        </p>
    @endforeach
@endsection