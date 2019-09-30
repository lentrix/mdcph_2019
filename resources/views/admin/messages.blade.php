@if($message=Session::get('Error'))
    <div class="alert alert-danger">
        Error: {{$message}}
    </div>
@endif

@if($message=Session::get('Info'))
    <div class="alert alert-success">
        Info: {{$message}}
    </div>
@endif

@if(count($errors)>0)

    <div class="alert alert-danger">
        Please fix the following errors:
        <ul>
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>

@endif
