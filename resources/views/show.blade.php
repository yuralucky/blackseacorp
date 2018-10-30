@extends('master')
@section('content')
    <div class="row">
        <div class="col-3">
            <h4><p class="result">
                    <a href="/" class="btn-dark">Home</a>
                </p></h4>
        </div>
        <div class="col-6">
            <form class="form-inline " action="/search">
                <input class="form-control mr-sm-2" type="search" name="s" placeholder="Search "
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
        <div class="col-3">
            <h4><p class="result">
                    <a href="/searchAjax" class="btn-dark">Live search</a>
                </p></h4>
        </div>
    </div>
@endsection
