@extends('master')
@section('content')
    @include('_partial.errors')

    <div class="pull-right">
        <a href="{{route('item.create')}}" class="btn btn-info">Add new</a>
    </div>
    <div class=" table-responsive">

        <table class="table table-hover">
            <thead>
            <tr>
                <th>N</th>
                <th>Name</th>
                <th>Parent_id</th>
                <th>Show Edit Delete</th>
            </tr>
            </thead>
            @foreach($items as $item)

                <tbody>
                <th>{{$item->id}}</th>
                <th>{{$item->name}}</th>
                <th>{{$item->parent_id}}</th>
                <th>

                    {{Form::open(['method'=>'DELETE'])}}
                    {{--@method('delete')--}}
                    {{Form::button('add',['class'=>'btn btn-block btn-danger send'])}}

                    {{Form::close()}}
                </th>
                <th>
                    <form action="" method="post">
                        {{ method_field('Delete') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn-success send">
                    </form>
                </th>
                </tbody>
            @endforeach
        </table>
    </div>

    <p><b></b>
    </p>
@endsection



