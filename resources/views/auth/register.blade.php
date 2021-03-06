<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login form shake effect</title>



    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">




</head>

<body style="background-color:white;">



<div class="login-form">
    <h1>Add Admin</h1>
    @if (count($errors) > 0)
        <div class="show_error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: #bc3d47;list-style: none">{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['url'=>'/auth/register','method'=>'post']) !!}
    <div class="form-group ">
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Full Name']) !!}
        <i class="fa fa-user"></i>
    </div>

    <div class="form-group ">
        {!! Form::text('email',null,['class'=>'form-control','type'=>'email','placeholder'=>'Email Address']) !!}
        <i class="fa fa-envelope"></i>
    </div>
    <div class="form-group log-status">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <i class="fa fa-lock"></i>
    </div>

    <div class="form-group log-status">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
        <i class="fa fa-lock"></i>
    </div>
    <span class="alert">Invalid Credentials</span>
    <a class="link" href="#">Lost your password?</a>
    {!! Form::button('<i class="fa fa-check"></i> Register',['type'=>'submit', 'class'=>'log-btn']) !!}

    {!! Form::close() !!}


</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="{{ assets('/assets/js/login_js.js') }}"></script>




</body>
</html>
