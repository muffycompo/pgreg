<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bingham University School of Postgraduate Studies</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/assets/css/bootstrap-default.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('/assets/js/respond.min.js')  }}"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 login-gap">
            <p class="text-center"><img src="{{ asset('/assets/images/bhu-logo.png') }}" alt="Logo" style="height: 100px;"></p>
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'post-signin', 'role' => 'form']) !!}
                        <fieldset>
                            <!--- Username Field --->
                            <div class="form-group">
                                {!! Form::text('username', old('username'), ['class' => 'form-control','placeholder' => 'Username']) !!}
                                @if($errors->has('username'))
                                    <p class="help-block"><small><span class="text-danger">{!! $errors->first('username') !!}</span></small></p>
                                @endif
                            </div>
                            <!--- Password Field --->
                            <div class="form-group">
                                {!! Form::password('password', ['class' => 'form-control','placeholder' => 'Password']) !!}
                            </div>
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('remember', old('remember')) !!}Remember Me |
                                    <a href="{{ route('password-reset') }}">Forgot Password?</a>
                                </label>
                            </div>
                            <p>{!! Form::submit('Login', ['class' => 'btn btn-lg btn-success btn-block']) !!}</p>
                            <p>Don't have an account? <a href="{{ route('signup') }}">Create new account</a></p>
                        </fieldset>
                    {!! Form::close() !!}
                    @include('partials._notification')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('/assets/js/jquery.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>

</body>

</html>
