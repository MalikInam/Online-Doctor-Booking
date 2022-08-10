@extends('patient.layouts.master')
@section('content')
<!-- Main Wrapper -->
<div class="main-wrapper">

	<!-- Header -->
	<!-- /Header -->

	<!-- Breadcrumb -->
	<div class="breadcrumb-bar">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-12 col-12">
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
						</ol>
					</nav>
					<h2 class="breadcrumb-title">Dashboard</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- /Breadcrumb -->

	<!-- Page Content -->
	<div class="content">
		<div class="container-fluid">

			<div class="row">

				<!-- Profile Sidebar -->
				@include('patient.layouts.side_bar')
				<!-- / Profile Sidebar -->

				<div class="col-md-7 col-lg-8 col-xl-9">
					<div class="card">
						<div class="card-body pt-0">

							<!-- Tab Menu -->
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="{{url('search_doctor')}}" >Search Doctor</a>
									</li>
									
								
									
								</ul>
							</nav>
							<!-- /Tab Menu -->

							<!-- Tab Content -->
							<div class="tab-content pt-0">

						
							<!-- Tab Content -->

						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
	<!-- /Page Content -->

	<!-- Footer -->

	<!-- /Footer -->

</div>
<!-- /Main Wrapper -->






@endsection