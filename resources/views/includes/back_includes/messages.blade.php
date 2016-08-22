@if(count($errors) > 0)
    <div class="alert alert-danger error-msg">

            @foreach($errors->all() as $errors)
                <p ><i class="fa fa-warning"> {{$errors}}</i></p>
            @endforeach

    </div>
@endif
@if(Session::has('message'))
    <div class="alert-success success-msg">
        <i class="fa fa-check"> {{Session::get('message')}}</i>
    </div>
@endif