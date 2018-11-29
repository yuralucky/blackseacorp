@extends('master')
@section('content')
    @include('_partial.errors')

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


                <tbody>
                <th>{{$item->id}}</th>
                <th>{{$item->name}}</th>
                <th>{{$item->parent_id}}</th>
                <th>
                    <form action="{{route('item.destroy',$item->id)}}" method="post">
                        <a href="{{route('item.edit',$item->id)}}" class="btn btn-info"> Edit</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </th>
                </tbody>

        </table>
    </div>

    <p><b></b>
    </p>

@endsection


