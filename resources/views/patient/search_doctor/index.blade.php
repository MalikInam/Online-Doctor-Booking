<!DOCTYPE html>
<html lang="en">

<!-- doccure/search.html  30 Nov 2019 04:12:16 GMT -->

<head>
	<meta charset="utf-8">
	<title>Doccure</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<!-- Favicons -->
	<link href="{{asset('assets/img/favicon.png')}}" rel="icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

	<!-- Fancybox CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fancybox/jquery.fancybox.min.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		@include('patient.layouts.header')
		<!-- /Header -->

		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-8 col-12">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Search</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">All Doctors</h2>
					</div>
					<div class="col-md-4 col-12 d-md-block d-none">
						<div class="sort-by">
							<!-- <span class="sort-title">Sort by</span> -->
							<!-- <span class="sortby-fliter">
								<select class="select">
									<option>Select</option>
									<option class="sorting">Rating</option>
									<option class="sorting">Popular</option>
									<option class="sorting">Latest</option>
									<option class="sorting">Free</option>
								</select>
							</span> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">

				<div class="row">

					<div class="col-md-12 col-lg-8 col-xl-12">

						<!-- Doctor Widget -->
						@foreach($doctors as $doctor)
						<div class="card">
							<div class="card-body">
								<div class="doctor-widget">
									<div class="doc-info-left">
										<div class="doctor-img">
											<a href="doctor-profile.html">
											@if(isset($doctor->profile->image ))
												<img src="images/{{$doctor->profile->image}}" class="img-fluid" alt="User Image">
												@endif
											</a>
										</div>
										<div class="doc-info-cont">
											<h4 class="doc-name"><a href="doctor-profile.html">{{$doctor->first_name}}{{$doctor->last_name}}</a></h4>
											<p class="doc-speciality">{{$doctor->education->Degree?? ''}},{{$doctor->education->college?? ''}}</p>
											@if(isset(Auth::user()->doctor->profile->speciality->image ))
											<h5 class="doc-department"><img src="images/{{$doctor->profile->speciality->image}}" class="img-fluid" alt="Speciality">{{$doctor->profile->speciality->name}}</h5>
											@endif
										</div>
									</div>
									<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="far fa-thumbs-up"></i> 98%</li>
													<li><i class="far fa-comment"></i> 17 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Florida, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i> </li>
												</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="{{url('view_profile',$doctor->id)}}">View Profile</a>
												<a class="apt-btn" href="{{url('appointment_doctor/'.$doctor->id)}}">Book Appointment</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>

			</div>

		</div>
		<!-- /Page Content -->

		<!-- Footer -->
		@include('patient.layouts.footer')
		<!-- /Footer -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

	<!-- Sticky Sidebar JS -->
	<script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
	<script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

	<!-- Datetimepicker JS -->
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

	<!-- Fancybox JS -->
	<script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{asset('assets/js/script.js')}}"></script>

</body>

<!-- doccure/search.html  30 Nov 2019 04:12:16 GMT -->

</html>