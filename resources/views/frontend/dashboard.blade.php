@extends('frontend.master')
@section('content')



<!-- Home Banner -->
<section class="section section-search">
	<div class="container-fluid">
		<div class="banner-wrapper">
			<div class="banner-header text-center">
				<h1>Search Doctor, Make an Appointment</h1>
				<p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
			</div>

			<!-- Search -->
			<div class="search-box">
				<form action="templateshub.net">
					<div class="form-group search-location">
						<input type="text" class="form-control" placeholder="Search Location">
						<!-- <span class="form-text">Based on your Location</span> -->
					</div>
					<div class="form-group search-info">
						<input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
						<!-- <span class="form-text">Ex : Dental or Sugar Check up etc</span> -->
					</div>
					<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
				</form>
			</div>
			<!-- /Search -->

		</div>
	</div>
</section>
<!-- /Home Banner -->

<!-- Clinic and Specialities -->
<section class="section section-specialities">
	<div class="container-fluid">
		<div class="section-header text-center">
			<h2>Specialities</h2>
			<p class="sub-title">Find experienced doctors across all specialties</p>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-9">
				<!-- Slider -->
				<div class="specialities-slider slider">
					@foreach($specializations as $speciality)
					<!-- Slider Item -->
					<div class="speicality-item text-center">
						<div class="speicality-img">
							<img src="images/{{$speciality->image}}" class="img-fluid" alt="Speciality">
							<span><i class="fa fa-circle" aria-hidden="true"></i></span>
						</div>
						<p>{{$speciality->name}}</p>
					</div>
					@endforeach
				</div>

				<!-- /Slider -->

			</div>


		</div>
	</div>
</section>
<!-- Clinic and Specialities -->

<!-- Popular Section -->
<section class="section section-doctor">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<div class="section-header ">
					<h2>Book Our Doctor</h2>
					<p>Quick appointment with doctors </p>
				</div>
				<div class="about-content">
					<div class="about-content">
						<p>Find best doctors and time slots across specialities,hospitals in your city.</p>
						<p>Our team of medical experts is there for you, from finding the right doctors and hospitals to booking appointments and giving any kind of medical help in between.</p>

					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="doctor-slider slider">
					<?php

					use App\Models\User;

					$doctors = User::where('user_type', 'doctor')->get();
					?>
					<!-- Doctor Widget -->
					@foreach($doctors as $doctor)
					<div class="profile-widget">
						<div class="doc-img">
							<a href="#">
							@if(isset(Auth::user()->profile->image))
								<img class="img-fluid" alt="User Image" src="images/{{$doctor->profile->image}}">
								@endif
							</a>
							<a href="javascript:void(0)" class="fav-btn">
								<i class="far fa-bookmark"></i>
							</a>
						</div>

						<div class="pro-content">

							<h3 class="title">
								<a href="doctor-profile.html">{{$doctor->first_name}} {{$doctor->last_name}}</a>
								<i class="fas fa-check-circle verified"></i>
							</h3>
							@if(isset(Auth::user()->doctor->education->Degree))
							<p class="speciality">{{$doctor->education->Degree}} - {{$doctor->education->college}}</p>
@endif
							<ul class="available-info">
								<li>
								@if(isset(Auth::user()->doctor->profile->address))
									<i class="fas fa-map-marker-alt"></i> {{$doctor->profile->address}}
									@endif
								</li>
								<!-- <li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li> -->
								<li>
								@if(isset(Auth::user()->doctor->profile->fee ))
									<i class="far fa-money-bill-alt"></i> {{$doctor->profile->fee}}
									<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
									@endif
								</li>
							</ul>
							<!-- <div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.html" class="btn book-btn">Book Now</a>
											</div>
										</div> -->

						</div>
					</div>
					@endforeach
					<!-- /Doctor Widget -->





				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Popular Section -->

<!-- Availabe Features -->
<section class="section section-features">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 features-img">
				<img src="{{asset('assets/img/features/feature.png')}}" class="img-fluid" alt="Feature">
			</div>
			<div class="col-md-7">
				<div class="section-header">
					<h2 class="mt-2">Availabe Features in Our Clinic</h2>
					<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p> -->
				</div>
				<div class="features-slider slider">
					<!-- Slider Item -->
					<div class="feature-item text-center">
						<img src="{{asset('assets/img/features/feature-01.jpg')}}" class="img-fluid" alt="Feature">
						<p>Patient Ward</p>
					</div>
					<!-- /Slider Item -->

					<!-- Slider Item -->
					<div class="feature-item text-center">
						<img src="{{asset('assets/img/features/feature-02.jpg')}}" class="img-fluid" alt="Feature">
						<p>Test Room</p>
					</div>
					<!-- /Slider Item -->

					<!-- Slider Item -->
					<div class="feature-item text-center">
						<img src="{{asset('assets/img/features/feature-03.jpg')}}" class="img-fluid" alt="Feature">
						<p>ICU</p>
					</div>
					<!-- /Slider Item -->

					<!-- Slider Item -->
					<div class="feature-item text-center">
						<img src="{{asset('assets/img/features/feature-04.jpg')}}" class="img-fluid" alt="Feature">
						<p>Laboratory</p>
					</div>
					<!-- /Slider Item -->

					<!-- Slider Item -->
					<div class="feature-item text-center">
						<img src="{{asset('assets/img/features/feature-05.jpg')}}" class="img-fluid" alt="Feature">
						<p>Operation</p>
					</div>
					<!-- /Slider Item -->

					<!-- Slider Item -->
					<div class="feature-item text-center">
						<img src="{{asset('assets/img/features/feature-06.jpg')}}" class="img-fluid" alt="Feature">
						<p>Medical</p>
					</div>
					<!-- /Slider Item -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Availabe Features -->




@endsection