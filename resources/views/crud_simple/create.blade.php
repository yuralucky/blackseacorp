@extends('master')
@section('content')
    @include('_partial.errors')
    {!! Form::open(['action'=>'ItemController@store','method'=>'post']) !!}
    <div class="form-group">
        {!! Form::text('name',null,['class'=>'form-control'] )!!}
    </div>
    <div class="form-group">
    {!! Form::number('parent_id',null,['class'=>'form-control']) !!}
    </div>
    <button class="btn btn-success btn-block">Add</button>
    {!! Form::close() !!}

@endsection

