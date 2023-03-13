@extends('admin.layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-7 col-auto">
                    <h3 class="page-title">Specialities</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Specialities</li>
                    </ul>
                </div>
                <div class="col-sm-5 col">
                    <a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">Add</a>
                </div>
            </div>
        </div>
 <!-- Edit Details Modal -->
 
                    <div class="modal-body">
                        <form method="POST" action="{{route('specialities.update',$speciality->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Specialities</label>
                                        <input type="text" name="name" class="form-control" value="{{$speciality->name}}">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="image" value="{{$speciality->image}}">
                                    </div>
                                </div>

                            </div>
                            <button type="submit"  class="btn btn-primary btn-block">Save Changes</button>
                        </form>
                    </div>
    </div></div>
        <!-- /Edit Details Modal -->
        @endsection