<!DOCTYPE html>
<html lang="en">

<!-- doccure/doctor-profile.html  30 Nov 2019 04:12:16 GMT -->

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

	<!-- Fancybox CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fancybox/jquery.fancybox.min.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
								<li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Doctor Profile</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container">
				@foreach($doctors as $doctor)
				<!-- Doctor Widget -->
				<div class="card">
					<div class="card-body">
						<div class="doctor-widget">
							<div class="doc-info-left">
								<div class="doctor-img">
									<img style="width: 150px; height:auto" src="{{asset('images/'.$doctor->profile->image)}}" alt="User Image">
								</div>
								<div class="doc-info-cont">
									<h4 class="doc-name">{{$doctor->first_name}}{{$doctor->last_name}}</h4>
									<p class="doc-speciality">{{$doctor->education->Degree?? ''}},{{$doctor->education->college?? ''}}</p>
									<h5 class="doc-department"><img src="{{asset('images/'.$doctor->profile->speciality->image)}}" class="img-fluid" alt="Speciality">{{$doctor->profile->speciality->name}}</h5>
								
									<div class="clinic-details">
										<p class="doc-location"><i class="fas fa-map-marker-alt"></i>{{$doctor->profile->address}} </p>
										
									</div>
									
								</div>
							</div>
							<div class="doc-info-right">
								<div class="clini-infos">
									<ul>
										<li><i class="far fa-thumbs-up"></i> 99%</li>
										<li><i class="far fa-comment"></i> 35 Feedback</li>
										<li><i class="fas fa-map-marker-alt"></i> Pakistan</li>
										<!-- <li><i class="far fa-money-bill-alt"></i> $100 per hour </li> -->
									</ul>
								</div>
								<div class="doctor-action">
								
									<a href="https://api.whatsapp.com/send?phone={{$doctor->profile->phone_no}}&text=Hello Doctor" class="btn btn-success">
										<i class="fa fa-whatsapp"> Whattsapp</i>
									</a>
									
									
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- /Doctor Widget -->

				<!-- Doctor Details Tab -->
				<div class="card">
					<div class="card-body pt-0">

						<!-- Tab Menu -->
						<nav class="user-tabs mb-4">
							<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
								<li class="nav-item">
									<a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
								</li>

								<li class="nav-item">
									<!-- <a class="nav-link" href="#doc_reviews" data-toggle="tab">Reviews</a> -->
								</li>

							</ul>
						</nav>
						<!-- /Tab Menu -->

						<!-- Tab Content -->
						<div class="tab-content pt-0">

							<!-- Overview Content -->
							<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
								<div class="row">
									<div class="col-md-12 col-lg-9">

										<!-- About Details -->
										
										<!-- /About Details -->

										<!-- Education Details -->
										<div class="widget education-widget">
											<h4 class="widget-title">Education</h4>
											<div class="experience-box">
												<ul class="experience-list">
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">{{$doctor->education->college?? ''}}</a>
																<div>{{$doctor->education->Degree?? ''}}</div>
																<span class="time">{{$doctor->education->start_year?? ''}} To {{$doctor->education->start_year?? ''}}</span>
															</div>
														</div>
													</li>
												
												</ul>
											</div>
										</div>
										<!-- /Education Details -->

										<!-- Experience Details -->
										<div class="widget experience-widget">
											<h4 class="widget-title">Work & Experience</h4>
											<div class="experience-box">
												<ul class="experience-list">
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">{{$doctor->experience->hospital_name}}</a>
																<span class="time">{{$doctor->experience->start_year}} To {{$doctor->experience->end_year}}</span>
															</div>
														</div>
													</li>
												
												</ul>
											</div>
										</div>
										<!-- /Experience Details -->

										<!-- Awards Details -->
										<div class="widget awards-widget">
											<h4 class="widget-title">Awards</h4>
											<div class="experience-box">
												<ul class="experience-list">
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<p class="exp-year">{{$doctor->award->award_date}}</p>
																<h4 class="exp-title">{{$doctor->award->award_title}}</h4>
																<p>{{$doctor->award->award_description}}</p>
															</div>
														</div>
													</li>
												
													
												</ul>
											</div>
										</div>
										<!-- /Awards Details -->


										<!-- Specializations List -->
										<div class="service-list">
											<h4>Specializations</h4>
											<ul class="clearfix">
												<li>{{$doctor->profile->speciality->name}}</li>
												
											</ul>
										</div>
										<!-- /Specializations List -->

									</div>
								</div>
							</div>
							
								
								


						</div> 
						<!-- /Reviews Content -->

						<!-- Business Hours Content -->

						<!-- /Business Hours Content -->

					</div>
				</div>
			</div>
			<!-- /Doctor Details Tab -->
			@endforeach
		</div>
	</div>
	<!-- /Page Content -->

	<!-- Footer -->
	@include('patient.layouts.footer')
	<!-- /Footer -->

	</div>
	<!-- /Main Wrapper -->

	<!-- Voice Call Modal -->
	<div class="modal fade call-modal" id="voice_call">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<!-- Outgoing Call -->
					<div class="call-box incoming-box">
						<div class="call-wrapper">
							<div class="call-inner">
								<div class="call-user">
									<img alt="User Image" src="assets/img/doctors/doctor-thumb-02.jpg" class="call-avatar">
									<h4>Dr. Darren Elder</h4>
									<span>Connecting...</span>
								</div>
								<div class="call-items">
									<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
									<a href="voice-call.html" class="btn call-item call-start"><i class="material-icons">call</i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Outgoing Call -->

				</div>
			</div>
		</div>
	</div>
	<!-- /Voice Call Modal -->

	<!-- Video Call Modal -->
	<div class="modal fade call-modal" id="video_call">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">

					<!-- Incoming Call -->
					<div class="call-box incoming-box">
						<div class="call-wrapper">
							<div class="call-inner">
								<div class="call-user">
									<img class="call-avatar" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
									<h4>Dr. Darren Elder</h4>
									<span>Calling ...</span>
								</div>
								<div class="call-items">
									<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
									<a href="video-call.html" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Incoming Call -->

				</div>
			</div>
		</div>
	</div>
	<!-- Video Call Modal -->

	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

	<!-- Fancybox JS -->
	<script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{asset('assets/js/script.js')}}"></script>

</body>

<!-- doccure/doctor-profile.html  30 Nov 2019 04:12:16 GMT -->

</html>