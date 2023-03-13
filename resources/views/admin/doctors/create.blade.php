@extends('admin.layouts.master')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">List of Doctors</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
                        <li class="breadcrumb-item active">Doctor</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
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

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Doctor Name</th>
                                        <th>Speciality</th>
                                        <th>Service</th>
                                        <th>Member Since</th>
                                       
                                        <th>Whatsapp</th>
                                        <th>Action</th>
                                        <!-- <th>Account Status</th> -->

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctor as $doc)
                                    <tr>

                                        <td>
                                            <h2 class="table-avatar">
                                            <a href="#" class="avatar avatar-lg mr-2"><img class="avatar-img rounded-circle" src="images/{{$doc->profile->image ?? ''}}" alt="User Image"></a>

                                                <a href="#">{{$doc->first_name}} {{$doc->last_name}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$doc->profile->speciality->name?? ''}}</td>
                                        <td>{{$doc->profile->service->name?? ''}}</td>
                                        <td>{{$doc->created_at}}</td>

                                      
                                        <td>{{$doc->profile->whattsapp_no ?? ''}}</td>

                                        <td>
                                        <a class="btn btn-danger" href="{{url('admin/doctors/delete/'.$doc->id)}}">Delete</a>

                                        </td>
                                    </tr> 
                                    @endforeach  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection