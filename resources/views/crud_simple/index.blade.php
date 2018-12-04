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
                <th>Image</th>
                <th>Name</th>
                <th>Parent_id</th>
                <th>Show Edit Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)

                <tr>
                    <th>{{$item->id}}</th>
                    <th><img src="{{asset('images/img2.jpg')}}" width="40px" height="40px" alt=""></th>
                    <th>{{$item->name}}</th>
                    <th>{{$item->parent_id}}</th>
                    <th>
                        <form action="{{route('item.destroy',$item->id)}}" method="post">

                            <a href="{{route('item.show',$item->id)}}" class="btn btn-info"> Show</a>
                            <a href="{{route('item.edit',$item->id)}}" class="btn btn-outline-danger"> Edit</a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger ajax-delete">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

    <p><b></b>
    </p>
@endsection


