@extends('doctor-admin.layouts.master')
@section('content')

<!-- Page Content -->
<div class="col-md-7 col-lg-8 col-xl-9">

	<div class="row">
		<div class="col-md-12">
			<div class="card dash-card">
				<div class="card-body">
					<div class="row">


						<!-- <div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar2">
															<div class="circle-graph2" data-percent="65">
																<img src="assets/img/icon-02.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Today Patient</h6>
															<h3>160</h3>
															<p class="text-muted">06, Nov 2019</p>
														</div>
													</div>
												</div> -->

						<!-- <div class="col-md-12 col-lg-4">
													<div class="dash-widget">
														<div class="circle-bar circle-bar3">
															<div class="circle-graph3" data-percent="50">
																<img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Appoinments</h6>
															<h3>85</h3>
															<p class="text-muted">06, Apr 2019</p>
														</div>
													</div>
												</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h4 class="mb-4">Patient Appoinment</h4>
			<div class="appointment-tab">

				<!-- Appointment Tab -->
				<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
					<li class="nav-item">
						<a class="nav-link active" href="#" data-toggle="tab">Appointments</a>
					</li>
				</ul>
				<!-- /Appointment Tab -->

				<div class="tab-content">

					<!-- Upcoming Appointment Tab -->
					<div class="tab-pane show active" id="upcoming-appointments">
						<div class="card card-table mb-0">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Patient Name</th>
												<th>Email</th>
												<th>phone</th>
												<th></th>
												<th></th>
												<th>Payment Status</th>
												<th>Checkup Status</th>

											</tr>
										</thead>
										<tbody>
											@foreach($appointments as $appointment)
											<tr>
												<td>
													<h2 class="table-avatar">

														<a href="">{{$appointment->name}} <span></span></a>
													</h2>
												</td>
												<td>{{$appointment->email}}</td>
												<td>{{$appointment->phone_number}}</td>
												<td>{{$appointment->payment}}</td>
												<td class="text-right">
													<div class="table-action">

														<a href="https://api.whatsapp.com/send?phone={{$appointment->phone_number}}&text=Thanku for contacting your appointment is booked" class="btn btn-sm bg-success-light">
															<i class="fas fa-whatsapp"></i> Whattsapp
														</a>
														<a href="{{url('delete_appointment',$appointment->id)}}" class="btn btn-sm bg-danger-light">
															<i class="fas fa-times"></i> Cancel
														</a>
													</div>
												</td>
												<td>                        <select class="form-select" aria-label="Default select example">
  <option selected>Paid</option>
  <option value="1">Pendding</option>
</select></td>
												<td>                        <select class="form-select" aria-label="Default select example">
  <option selected>checkup complete</option>
  <option value="1">Pendding</option>
</select></td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /Upcoming Appointment Tab -->


				</div>
			</div>
		</div>
	</div>

</div>

<!-- /Page Content -->





@endsection