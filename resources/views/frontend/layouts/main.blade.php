<!DOCTYPE html>
<html>
	<head>
		<title>{{__("Best Film VN")}} | @yield('title')</title>
		<link href="{{ asset('fe_css/bootstrap.css') }} " rel='stylesheet' type='text/css' />
		<!-- Custom Theme files -->
		<link href="{{ asset('fe_css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
		<!-- Custom Theme files -->
		<link rel="shortcut icon" href="{{ asset("favicon.png") }}">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
		
		<!-- laravel header -->
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfont-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- Scripts -->
		<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

		<!-- Fonts -->
		<link rel="dns-prefetch" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		
		<!-- jQuery 3 -->
		<script src="{{ asset('fe_js/jquery.min.js') }}"></script>

		 <!-- start css -->
		 @yield('css')
    <!-- end css -->
	</head>
<body style="font-family: fantasy;">
	<!-- header-section-starts -->
	<div class="full">
		<!-- start menu-bar -->
            @include('frontend.layouts.partials.menu-bar')
        <!-- end menu-bar -->	
		<div class="main">
		<!-- start content -->
            @yield('content')
        <!-- end content -->

        <!-- start footer -->
            @include('frontend.layouts.partials.footer')
        <!-- end footer -->	
		</div>
		<!-- start js -->
		<!-- custom script -->
		<script src="{{ asset('bower_components/remarkable-bootstrap-notify/bootstrap-notify.js') }}"></script>
		<script src="{{ asset('bower_components/remarkable-bootstrap-notify/bootstrap-notify.min.js') }}"></script>
		<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
		<script src="{{ asset('bower_components/moment/min/moment-with-locales.min.js') }}"></script>
		<script src="{{ asset('bower_components/moment/min/moment-with-locales.js') }}"></script>
		<script src="{{ asset('fe_js/main.js') }}"></script>
    	<!-- end js -->
	</div>
	<div class="clearfix"></div>
	 <!-- start content -->
	 @yield('script')
    <!-- end content -->
</body>
</html>
