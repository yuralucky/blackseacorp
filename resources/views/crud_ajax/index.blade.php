@extends('master')
@section('content')
    @include('_partial.errors')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add new
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <label class="">Name</label>
                    <input type="text" name="name" id="name_ajax" class="form-control">
                    <label class="">Parent_id</label>
                    <input type="text" name="parent_id" id="parent_ajax" class="form-control">
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary addNew">Add New</button>
                </div>
            </div>
        </div>
    </div>
    <div class="result"></div>
    <div class=" table-responsive">

        <table class="table table-hover " id="table_result">
            <thead>
            <tr>
                <th>N</th>
                <th>Name</th>
                <th>Parent_id</th>
                <th>Show Edit Delete</th>
            </tr>
            </thead>


            <tbody>
            @foreach($items as $item)
                <tr class="item{{$item->id}}">
                    <th>{{$item->id}}</th>
                    <th>{{$item->name}}</th>
                    <th>{{$item->parent_id}}</th>

                    <th>
                        <form >
                            @csrf
                            <button type="button" class="btn  btn-success delete_ajax" value="{{$item->id}}">Delete</button>
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



