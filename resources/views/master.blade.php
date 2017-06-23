<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mfawa Alfred Onen">

	<title>Bingham University School of Postgraduate Studies</title>

	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('/assets/css/bootstrap-default.min.css') }}" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="{{ asset('/assets/css/metisMenu.min.css') }}" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{ asset('/assets/css/sb-admin-2.css') }}" rel="stylesheet">

    @yield('header.styles')

    <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
	<link href="{{ asset('/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="{{ asset('/assets/js/html5shiv.js') }}"></script>
	<script src="{{ asset('/assets/js/respond.min.js') }}"></script>
	<![endif]-->

</head>

<body>

<div id="wrapper">

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#">
				<img src="{{ asset('/assets/images/dashboard-logo.png') }}" alt="Logo">
			</a>
		</div>
		<!-- /.navbar-header -->

		<ul class="nav navbar-top-links navbar-right">
			<!-- /.dropdown -->
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-user fa-fw"></i> {{ $user->firstname . ' ' . $user->lastname }} <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu dropdown-user">
					<li><a href="{{ route('change-password') }}"><i class="fa fa-lock fa-fw"></i> Change Password</a>
					{{--</li>--}}
					<li class="divider"></li>
					<li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					</li>
				</ul>
				<!-- /.dropdown-user -->
			</li>
			<!-- /.dropdown -->
		</ul>
		<!-- /.navbar-top-links -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li><p>&nbsp;</p></li>
					<li>
						<a href="{{ route('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
					</li>
					<li>
						<a href="{{ route('personal') }}"><i class="fa fa-user-md fa-fw"></i> Personal Details</a>
					</li>
					{{--<li>--}}
						{{--<a href="#"><i class="fa fa-home fa-fw"></i> Contact Address</a>--}}
					{{--</li>--}}
					<li>
						<a href="{{ route('nok') }}"><i class="fa fa-users fa-fw"></i> Next of Kin Details</a>
					</li>
					<li>
						<a href="{{ route('ssce') }}"><i class="fa fa-newspaper-o fa-fw"></i> SSCE Details</a>
					</li>
					<li>
						<a href="{{ route('qualifications') }}"><i class="fa fa-certificate fa-fw"></i> Qualifications</a>
					</li>
					<li>
						<a href="{{ route('programmes') }}"><i class="fa fa-file-text-o fa-fw"></i> Programme of Study</a>
					</li>
					<li>
						<a href="{{ route('print') }}" target="_blank"><i class="fa fa-print fa-fw"></i> Printable Form</a>
					</li>
					<li>
						<a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					</li>
				</ul>
			</div>
			<!-- /.sidebar-collapse -->
		</div>
		<!-- /.navbar-static-side -->
	</nav>

	<div id="page-wrapper">

		@yield('content')

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('/assets/js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/assets/js/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('/assets/js/sb-admin-2.js') }}"></script>

<!-- Custom Application JavaScript -->
<script src="{{ asset('/assets/js/custom.js') }}"></script>

@yield('footer.scripts')


</body>

</html>
