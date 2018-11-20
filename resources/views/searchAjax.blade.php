@extends('master')
@section('content')
    <div class="row">
        <div class="col-3">
            <h4><p class="result"></p></h4>
        </div>
        <div class="col-6">

            <form method="get" class="form-inline">
                @csrf
                <input class="form-control form-inline mr-sm-2" type="search" name="search" id="search"
                       placeholder="Search Ajax"
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchAjax">Search</button>

            </form>
            <table class="table table-hover table-bordered table-striped text-center table-responsive">
                <thead>
                <td>Name</td>
                <td>Boss</td>
                <td>Position</td>
                </thead>
                @foreach($units as $unit)
                    <tr>
                        <td>{{$unit->name}}</td>
                        <td>{{$unit->boss_id}}</td>
                        <td>{{$unit->position}}</td>
                    </tr>
                @endforeach
            </table>


        </div>
    </div>
    <div class="col-3 output">

    </div>
    </div>
@endsection
<script>
    $(document).ready(function () {
        $('#searchAjax.js').on('click', function () {
            $.ajax({
                url: '/tree',
                dataType: 'json',
                success: function (data) {
                    $('.output').html(data)
                }
            })
        })

    })
</script>

