@extends('master')
@section('content')
    <div class="row">
        <div class="col-10">
            <h2>Employees BlackSeaCorporation</h2>
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

    </div>


    </div>
    </div>
    </div>
    <script src="{{asset('js/tree.js')}}"></script>
@endsection
