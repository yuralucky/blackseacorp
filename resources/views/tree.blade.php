@extends('master')
@section('content')
    <div class="row">
        <div class="col-6">
            <h2>Category tree</h2>
            <ul id="tree1">
                @foreach($names as $value)
                    <li>{{$value->name}}
                        @if(count($value->childs))
                            @include('manageChild',['childs'=>$value->childs])
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
        {{--<div class="col-6">--}}
            {{--<h3>Add New Category</h3>--}}


            {{--{!! Form::open(['route'=>'add.category']) !!}--}}


            {{--@if ($message = Session::get('success'))--}}
                {{--<div class="alert alert-success alert-block">--}}
                    {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                    {{--<strong>{{ $message }}</strong>--}}
                {{--</div>--}}
            {{--@endif--}}


            {{--<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">--}}
                {{--{!! Form::label('Title:') !!}--}}
                {{--{!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}--}}
                {{--<span class="text-danger">{{ $errors->first('title') }}</span>--}}
            {{--</div>--}}


            {{--<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">--}}
                {{--{!! Form::label('Category:') !!}--}}
                {{--{!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}--}}
                {{--<span class="text-danger">{{ $errors->first('parent_id') }}</span>--}}
            {{--</div>--}}


            {{--<div class="form-group">--}}
                {{--<button class="btn btn-success">Add New</button>--}}
            {{--</div>--}}


            {{--{!! Form::close() !!}--}}


        {{--</div>--}}
    </div>


    </div>
    </div>
    </div>
    <script src="{{asset('js/tree.js')}}"></script>
@endsection
