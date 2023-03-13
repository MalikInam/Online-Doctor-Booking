<!DOCTYPE html>
<html lang="en">

<!-- doccure/booking.html  30 Nov 2019 04:12:16 GMT -->

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
					<div class="col-md-12 col-12">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Booking</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Booking</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container">

				<div class="row">
					<div class="col-12">

						<div class="card">
							<div class="card-body">
								<div class="booking-doc-info">
									<a href="" class="booking-doc-img">
										<img src="{{asset('images/'.$AppointmentDoctor->profile->image)}}" alt="User Image">
									</a>
									<div class="booking-info">
										<h4><a href="">{{$AppointmentDoctor->first_name}} {{$AppointmentDoctor->last_name}}</a></h4>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">35</span>
										</div>
										<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> {{$AppointmentDoctor->profile->address}}</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Schedule Widget -->
						<div class="main-wrapper">

							<!-- Header -->

							<!-- /Header -->

							<!-- Breadcrumb -->

							<!-- /Breadcrumb -->

							<!-- Page Content -->
							<!-- <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar"> -->

							<!-- Profile Sidebar -->

							<!-- /Profile Sidebar -->

						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<form method="POST" action="{{url('doctor_appointment_store')}}" enctype="multipart/form-data">
								@csrf
								<!-- Basic Information -->
								<div class="card">
									<input type="hidden" name="doctor_id" value="{{$AppointmentDoctor->id}}">
									<div class="card-body">
										<h4 class="card-title">Patient Information</h4>
										<div class="row form-row">


											<div class="col-md-6">
												<div class="form-group">
													<label>Email <span class="text-danger">*</span></label>
													<input type="email" name="email" @if(isset($patient)) value="{{$patient->email}}" @endif class="form-control" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Name <span class="text-danger">*</span></label>
													<input type="text" name="name" @if(isset($patient)) value="{{$patient->first_name}} {{$patient->last_name}}" @endif class="form-control" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Phone Number</label>
													<input type="number" name="phone_number" @if(isset($patient)) value="{{$patient->profile->phone_no}}" @endif  class="form-control" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Whattsapp</label> 
													<input type="number" name="whatsapp" @if(isset($patient)) value="{{$patient->profile->whattsapp_no}}" @endif  class="form-control" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Address</label>
													<input type="text" name="address" @if(isset($patient)) value="{{$patient->profile->address}}" @endif class="form-control" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group mb-0">
													<label>Age</label>
													<input type="number" name="age" @if(isset($patient)) value="{{$patient->profile->age}}" @endif class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group mb-0">
													<label>payment</label>
													<input type="text" name="payment" @if(isset($patient)) value="{{$patient->profile->payment}}" @endif class="form-control">
												</div>
											</div>
										</div>

									</div>
								</div>
								<!-- /Memberships -->

								<div class="submit-section submit-btn-bottom">
									<button type="submit" class="btn btn-primary submit-btn">Save</button>
								</div>
							</form>
						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->

			<!-- Footer -->

			<!-- /Footer -->

		</div>
		<!-- /Schedule Widget -->

		<!-- Submit Section -->
		<!-- <div class="submit-section proceed-btn text-right">
								<a href="checkout.html" class="btn btn-primary submit-btn">Proceed to Pay</a>
							</div> -->
		<!-- /Submit Section -->

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

	<!-- Custom JS -->
	<script src="{{asset('assets/js/script.js')}}"></script>

</body>

<!-- doccure/booking.html  30 Nov 2019 04:12:16 GMT -->

</html>