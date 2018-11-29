@extends('master')
@section('content')

    @include('_partial.errors')
    {!! Form::model($item,['action'=>['ItemController@update',$item->id],'method'=>'patch']) !!}
    <div class="form-group">
        {!! Form::text('name',$item->name,['class'=>'form-control'] )!!}
    </div>
    <div class="form-group">
        {!! Form::number('parent_id',$item->parent_id,['class'=>'form-control']) !!}
    </div>
    <button class="btn btn-success btn-block">Update</button>
    {!! Form::close() !!}
@endsection