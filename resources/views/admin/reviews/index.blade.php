@extends('admin.layouts.master')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-7 col-auto">
                    <h3 class="page-title">Reviews</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Review Details</li>
                    </ul>
                </div>
                <!-- <div class="col-sm-5 col">
                    <a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">Add</a>
                </div> -->
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Patients</th>
                                        <th>Doctors</th>
                                        <th>Rating</th>
                                        <th>Description</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ratings as $review)
                                    <tr>
                                        <td>{{$review->id}}</td>
                                       

                                        <td>
                                        <a href="#" class="avatar avatar-lg mr-2"><img class="avatar-img rounded-circle" src="images/{{$review->patient->profile->image}}" alt="User Image"></a>
                                        <!-- <img class="avatar-img" src="images/{{$review->patient->profile->image}}" alt="patient"> -->
                                        {{$review->patient->first_name}} 
                                        
                                    </td>
                                    <td>
                                        
                                        <a href="#" class="avatar avatar-lg mr-2"><img class="avatar-img rounded-circle" src="images/{{$review->doctor->profile->image}}" alt="User Image"></a>
                                            <!-- <img class="avatar-img" src="images/{{$review->doctor->profile->image}}" alt="doctor"> -->
                                           
                                            {{$review->doctor->first_name}}
                                    </td>
                                        <td>{{$review->rating}}</td>
                                        <td>{{$review->description}}</td>
                                        
                                        <!-- <form method="POST" action="{{url('/reviews/'.$review->id)}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <td class="text-right">
                                                <div class="actions">
                                                    <a class="btn btn-sm bg-success-light" href="{{url('/reviews/'.$review->id.'/edit')}}">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>
                                                    <button type="submit" data-toggle="confirmation" class="btn btn-sm bg-danger-light">
                                                        <i class="fe fe-trash"></i> Delete

                                                    </button>
                                                </div>
                                            </td>
                                        </form> -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Modal -->
        <!-- <div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Specialities</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('specialities.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Specialities</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /ADD Modal -->

    </div>
</div>
<!-- /Main Wrapper -->
@endsection