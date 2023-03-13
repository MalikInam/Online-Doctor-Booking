@extends('doctor-admin.layouts.master')
@section('content')
<div class="main-wrapper">

	<!-- Header -->

	<!-- /Header -->

	<!-- Breadcrumb -->

	<!-- /Breadcrumb -->

	<!-- Page Content -->
	<!-- <div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						 -->
	<!-- Profile Sidebar -->

	<!-- /Profile Sidebar -->

</div>
<div class="col-md-7 col-lg-8 col-xl-9">

	<div class="row row-grid">
	@foreach($patients as $patient)
		<div class="col-md- col-lg-4 col-xl-3">
			<div class="card widget-profile pat-widget-profile">
				<div class="card-body">
					<div class="pro-widget-content">
						<div class="profile-info-widget">
							<a href="#" class="booking-doc-img">
								<img src="images/{{$patient->profile->image?? '' }}" alt="User Image">
							</a>
							<div class="profile-det-info">
								<h3><a href="#">{{$patient->first_name}}{{$patient->last_name}}</a></h3>

							</div>
						</div>
					</div>
					<div class="patient-info">
						<ul>
							<li>Phone <span>{{$patient->profile->phone_no ?? ""}}</span></li>
							<li>Age <span>{{$patient->profile->age ?? ""}}</span></li>
							<li>payment <span>{{$patient->profile->payment ?? ""}}</span></li>

						</ul>
					</div>
				</div>
				
			</div>
			
		</div>
		@endforeach

		
	</div>

</div>
</div>

@endsection