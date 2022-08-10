@extends('admin.layouts.master')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-7 col-auto">
                    <h3 class="page-title">Patients</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Patients Details</li>
                    </ul>
                </div>
    
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="datatable table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Patients</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Phone No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patient as $pat)
                                    <tr>
                                        <td>1</td>

                                        <td>
                                            
                                        <a href="#" class="avatar avatar-lg mr-2">
                                            <img class="avatar-img rounded-circle" src="images/{{$pat->profile->image?? '' }}" alt="User Image">
                                        </a>
                                            
                                                
                                                {{$pat->first_name}}
                                            
                                        </td>
                                        <td>{{$pat->profile->age ?? ''}}</td>
                                        <td>{{$pat->profile->address ?? ''}}</td>
                                        <td>{{$pat->profile->phone_no ?? ''}}</td>
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
<!-- /Main Wrapper -->
@endsection