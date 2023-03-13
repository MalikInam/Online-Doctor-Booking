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
        <form action="{{route('search_booking')}}" method="" role="search">
        @csrf
        <?php
use App\Models\User;

$user = User::all();
?>
     <div class="select-form">

                                   
<div class="select-itms">


    <select name="select" id="select1" >
    @foreach($user as $u)
         
       
        <option value="">{{$u->name}}</option>
       
        @endforeach

    </select>
    <button type="submit" class="btn head-btn1">Search</button>
</div>

</div>
</form>
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
                                        <th>Action</th>
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
                                        <td>
                                        <a class="btn btn-danger" href="{{url('admin/patients/destory/'.$pat->id)}}">Delete</a>


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
<!-- /Main Wrapper -->
@endsection