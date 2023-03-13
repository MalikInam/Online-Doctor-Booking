<!DOCTYPE html>
<html lang="en">

<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->

<head>
	<meta charset="utf-8">
	<title>DoctorCare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<!-- Favicons -->
	<link href="{{asset('assets/img/favicon.png')}}" rel="icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
			<script src="{{asset('assets/js/respond.min.js')}}"></script>
		<![endif]-->

</head>

<body>


@include('patient.layouts.header')


@yield('content')


@include('patient.layouts.footer')

	  
		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>
		
	</body>

<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->
</html>