@extends('admin.layouts.master')
@section('content')


			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-users"></i>
										</span>
										<?php
								use App\Models\User;
										$total_doctor = User::where('user_type','doctor')->count();
										?>
										<div class="dash-count">
											<h3>{{$total_doctor}}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										<h6 class="text-muted">Doctors</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
										<?php
										$total_patient = User::where('user_type','patient')->count();
										?>
										<div class="dash-count">
											<h3>{{$total_patient}}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">Patients</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						use App\Models\Booking;
						$total_appointment = Booking::count();
						?>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-money"></i>
										</span>
										<div class="dash-count">
											<h3>{{$total_appointment}}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">Appointment</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
				
					</div>
				
					<div class="row">
						<div class="col-md-6 d-flex">
						
							<!-- Recent Orders -->
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Doctors List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor Name</th>
													<th>Speciality</th>
													<th>Service</th>
													<!-- <th>Fess</th> -->
								
												</tr>
											</thead>
											<tbody>
												<?php
												
												$doctors = User::where('user_type','doctor')->get();
												?>
												@foreach($doctors as $doctor)
												<tr>
													<td>
														<h2 class="table-avatar">
														@if(isset($doctor->profile->image ))
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="images/{{$doctor->profile->image}}" alt="User Image"></a>
															@endif
															<a href="profile.html">{{$doctor->first_name}} {{$doctor->last_name}}</a>
														</h2>
													</td>
													<td>{{$doctor->profile->speciality->name?? ''}}</td>
													<td>{{$doctor->profile->service->name?? ''}}</td>
													
												
												</tr>
												@endforeach
											
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
						<div class="col-md-6 d-flex">
						
							<!-- Feed Activity -->
							<div class="card  card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Patients List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>													
													<th>Patient Name</th>
													<th>Email</th>
													<th>Phone</th>
													<th>Address</th>													
												</tr>
											</thead>
											<tbody>
											<?php
												$patients = User::where('user_type','patient')->get();
												?>
												@foreach($patients as $patient)
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="images/{{$patient->profile->image ?? ''}}" alt="User Image"></a>
															<a href="profile.html">{{$patient->first_name}} {{$patient->last_name}}</a>
														</h2>
													</td>
													<td class="text-right">{{$patient->email}}</td>
													<td>{{$patient->profile->phone_no ?? ''}}</td>
													<td>{{$patient->profile->address ?? ''}}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Feed Activity -->
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							
							<!-- /Recent Orders -->
							
						</div>
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		


@endsection