@if($message=Session::get('success'))
    <div class="alert alert-success close-icon">
        <p>{{$message}}
            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                <span aria-hidden="true">&times</span>
            </button>
        </p>
    </div>
@endif