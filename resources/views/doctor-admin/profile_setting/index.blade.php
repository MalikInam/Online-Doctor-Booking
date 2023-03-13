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
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar"> -->

    <!-- Profile Sidebar -->

    <!-- /Profile Sidebar -->

</div>
<div class="col-md-7 col-lg-8 col-xl-9">
    <form method="POST" action="{{url('doctor_profile_store')}}" enctype="multipart/form-data">
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
                            <label>Fee</label>
                            <input type="number"  name="age" @if(isset($profiles))  value="{{$profiles->fee}}" @endif  class="form-control">
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
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About Me</h4>
                <div class="form-group mb-0">
                    <label>Biography</label>
                    <textarea class="form-control" name="about"  rows="5">@if(isset($profiles))  {{$profiles->about}} @endif</textarea>
                </div>
            </div>
        </div>
        <!-- /About Me -->

        <!-- Clinic Info -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Clinic Info</h4>
                <div class="row form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Clinic Name</label>
                            <input type="text" name="name" @if(isset($clinics))  value="{{$clinics->name}}" @endif class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Clinic Address</label>
                            <input type="text" name="address" @if(isset($clinics))  value="{{$clinics->address}}" @endif class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Clinic Images</label>
                            <input type="file" name="icon" @if(isset($clinics))  value="{{$clinics->image}}" @endif class="form-control" required>
                        </div>
                        <div class="upload-wrap">
                        <div class="upload-images">
                            <img src="images/{{$clinics->image?? ''}}" alt="Upload Image">
                        </div>
    
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Clinic Info -->

        <!-- Services and Specialization -->
        <div class="card services-card">
            <div class="card-body">
                <h4 class="card-title">Services and Specialization</h4>
                <div class="form-group mb-0">
                    <label>Services </label>
                    <select name="service_id" class="form-control">
                    @foreach($service as $dt)
                    <option value="{{$dt->id}}">{{$dt->name}}</option>
                    @endforeach
                    </select>
                    <!-- <input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Specialization" name="specialist" id="specialist"> -->
                </div>

                <div class="form-group mb-0">
                    <label>Specialization </label>
                    <select name="specilization_id" class="form-control">
                    @foreach($data as $dt)
                    <option value="{{$dt->id}}">{{$dt->name}}</option>
                    @endforeach
                    </select>
                    <!-- <input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Specialization" name="specialist" id="specialist"> -->
                </div>
            </div>
        </div>
        <!-- /Services and Specialization -->

        <!-- Education -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Education</h4>
                <div class="education-info">
                    <div class="row form-row education-cont">
                        <div class="col-12 col-md-10 col-lg-11">
                            <div class="row form-row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Degree</label>
                                        <input type="text" class="form-control" name="Degree" @if(isset($educations))  value="{{$educations->Degree}}" @endif >
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>College/Institute</label>
                                        <input type="text" class="form-control" name="college" @if(isset($educations))  value="{{$educations->college}}" @endif>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label> Start Year</label>
                                        <input type="date" class="form-control" name="start_year"@if(isset($educations))  value="{{$educations->start_year}}" @endif>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label> End Year</label>
                                        <input type="date" class="form-control" name="end_year"@if(isset($educations))  value="{{$educations->end_year}}" @endif>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Education -->

        <!-- Experience -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Experience</h4>
                <div class="experience-info">
                    <div class="row form-row experience-cont">
                        <div class="col-12 col-md-10 col-lg-11">
                            <div class="row form-row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Hospital Name</label>
                                        <input type="text" class="form-control" name="hospital_name" @if(isset($experiences))  value="{{$experiences->hospital_name}}" @endif>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Start Year</label>
                                        <input type="date" class="form-control" name="start_year"@if(isset($experiences))  value="{{$experiences->start_year}}" @endif>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>End Year</label>
                                        <input type="date" class="form-control" name="end_year"@if(isset($experiences))  value="{{$experiences->end_year}}" @endif>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Experience -->

        <!-- Awards -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Awards</h4>
                <div class="awards-info">
                    <div class="row form-row awards-cont">
                        <div class="col-12 col-md-5">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="award_title" @if(isset($awards))  value="{{$awards->award_title}}" @endif>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="form-group">
                                <label> Date</label>
                                <input type="date" class="form-control" name="award_date"@if(isset($awards))  value="{{$awards->award_date}}" @endif>
                            </div>
                        </div>

                        <div class="col-12 col-md-5">
                            <div class="form-group">
                                <label> Description</label>
                                <input type="text" class="form-control" name="award_description"@if(isset($awards))  value="{{$awards->award_description}}" @endif>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
@endsection