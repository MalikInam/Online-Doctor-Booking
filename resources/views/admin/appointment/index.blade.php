@extends('admin.layouts.master')
@section('content')
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Appointments</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Appointments</li>
								</ul>
							</div>
						</div>
					</div>
					@if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                            @endif

                            @if(session()->has('deleted'))
                            <div class="alert alert-danger">
                                {{ session()->get('deleted') }}
                            </div>
                            @endif
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor Name</th>
													<th>Patient Name</th>
													<th>Address</th>
													<th class="text-right">Phone Number</th>
													<th class="text-right">Payment</th>
													
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                                                <?php 
use App\Models\Booking;
$All_appointments = Booking::all();
                                                ?>
                                               @foreach($All_appointments as $appointments)
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html">{{$appointments->doctor->first_name}} {{$appointments->doctor->last_name}}</a>
														</h2>
													</td>
											
													<td>
														<h2 class="table-avatar">
															<a href="">{{$appointments->name ?? ''}}</a>
														</h2>
													</td>
                                                    <td>{{$appointments->address ?? ''}}</td>
											
													<td class="text-right">
                                                    {{$appointments->phone_number ?? ''}}
													</td>
													
													<td class="text-right">
                                                    {{$appointments->payment ?? ''}}
													</td>

													<td>
													<a class="btn btn-danger" href="{{url('admin/appointment/destory/'.$appointments->id)}}">Delete</a>

                                        </td>
										
                                                </tr>
                                               @endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
					</div>
				</div>			
			</div>

@endsection