<!doctype html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('/frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('/frontend') }}/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('/frontend') }}/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="{{ asset('/frontend') }}/assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('/frontend') }}/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('/frontend') }}/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/frontend') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/frontend') }}/assets/img/favicon.png">
    @yield('css')
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layout.navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layout.sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					@yield('content')
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		@include('layout.footer')
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{ asset('/frontend') }}/assets/vendor/jquery/jquery.min.js"></script>
	<script src="{{ asset('/frontend') }}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{ asset('/frontend') }}/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="{{ asset('/frontend') }}/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{ asset('/frontend') }}/assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="{{ asset('/frontend') }}/assets/scripts/klorofil-common.js"></script>
	<script>
		@if(Session::has('success'))
			
		@endif
	</script>
	@yield('js')
</body>

</html>
