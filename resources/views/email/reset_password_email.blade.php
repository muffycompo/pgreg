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
                <div class="panel-body">
                    <p>Hello <strong>{{ $data->personal()->first()->firstname . ' ' . $data->personal()->first()->middlename . ' ' . $data->personal()->first()->surname }}</strong>, we have generated a password reset link for you. Click the link below to complete the password reset process.</p>
                    <p><a href="{{ route('password-reset-url',$data->password_reset_token) }}" class="btn btn-info">Reset Password</a></p>
                    <p>
                        School of Postgraduate Studies<br>
                        Bingham University<br>
                        BinghamICT Team,<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
