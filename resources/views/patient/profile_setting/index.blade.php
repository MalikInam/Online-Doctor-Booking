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
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
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

						<!-- /Profile Sidebar -->
						
						<div class="col-md-7 col-lg-8 col-xl-9">
    <form method="POST" action="{{url('patient_profile_store')}}" enctype="multipart/form-data">
        @csrf
        <!-- Basic Information -->
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">Basic Information</h4>
                <div class="row form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="change-avatar">
                                <div class="profile-img">
                                    <img src="images/{{$profiles->image?? ''}}" alt="User Image">
                                </div>
                                <div class="upload-img">
                                    <div class="change-photo-btn">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" value="{{$user->email}}" name="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phone_no" @if(isset($profiles))  value="{{$profiles->phone_no}}" @endif  class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Whattsapp</label>
                            <input type="number" name="whattsapp_no" @if(isset($profiles))  value="{{$profiles->whattsapp_no}}" @endif  class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address"  @if(isset($profiles))  value="{{$profiles->address}}" @endif   class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label>Age</label>
                            <input type="number"  name="age" @if(isset($profiles))  value="{{$profiles->age}}" @endif  class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label>Payment</label>
                            <input type="text"  name="payment" @if(isset($profiles))  value="{{$profiles->payment}}" @endif  class="form-control">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <!-- <label>Password</label> -->
                            <input type="hidden" name="password" value="{{$user->password}}" class="form-control">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Basic Information -->

        <!-- About Me -->
       
        <!-- /About Me -->

        <!-- Clinic Info -->
      
        <!-- /Clinic Info -->

        <!-- Services and Specialization -->
        
        <!-- /Services and Specialization -->

        <!-- Education -->
      
        <!-- /Education -->

        <!-- Experience -->
      
        <!-- /Experience -->

        <!-- Awards -->
        
        <!-- /Awards -->

      
      
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
		<!-- /Main Wrapper -->
	  
	@endsection
	