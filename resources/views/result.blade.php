@extends('master')
@section('content')
@include('errors')

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
                    <th>Delete</th>
                </tr>
            </thead>
        @foreach($items as $item)

                <tbody>
                <th>{{$item->id}}</th>
                <th>{{$item->name}}</th>
                <th>{{$item->parent_id}}</th>
                <th>
                   <form action="{{route('item.destroy',$item->id)}}" method="post">
                       <a href="{{route('item.show',$item->id)}}" class="btn btn-info"> Show</a>
                       <a href="{{route('item.edit',$item->id)}}" class="btn btn-outline-danger"> Edit</a>
                       @csrf
                       @method('delete')
                       <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
                </th>
                </tbody>
            @endforeach
        </table>
    </div>

    <p><b></b>
    </p>

@endsection


