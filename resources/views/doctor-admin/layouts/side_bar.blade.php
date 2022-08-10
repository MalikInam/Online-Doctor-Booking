<div class="row">
    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

        <!-- Profile Sidebar -->
        <div class="profile-sidebar">
            <div class="widget-profile pro-widget-content">
                <div class="profile-info-widget">
                    <a href="#" class="booking-doc-img">
                        <img src="images/{{Auth::user()->profile->image?? ''}}" alt="User Image">
                    </a>
                    <div class="profile-det-info">
                        <h3>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>

                        <div class="patient-details">
                            <h5 class="mb-0">{{Auth::user()->education->Degree?? ''}}</h5>
                            <p class="text-muted mb-0">{{Auth::user()->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-widget">
                <nav class="dashboard-menu">
                    <ul>
                        <li class="active">
                            <a href="{{url('/doctor')}}">
                                <i class="fas fa-columns"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="{{url('appointment_detail')}}">
                                <i class="fas fa-calendar-check"></i>
                                <span>Appointments</span>
                            </a>
                        </li> -->
                        <li>
                            <a href="{{url('patient_detail')}}">
                                <i class="fas fa-user-injured"></i>
                                <span> Patients</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="{{url('schedule_time')}}">
                                <i class="fas fa-hourglass-start"></i>
                                <span>Schedule Timings</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="invoices.html">
                                <i class="fas fa-file-invoice"></i>
                                <span>Invoices</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="{{url('review_detail')}}">
                                <i class="fas fa-star"></i>
                                <span>Reviews</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="chat-doctor.html">
                                <i class="fas fa-comments"></i>
                                <span>Message</span>
                                <small class="unread-msg">23</small>
                            </a>
                        </li> -->
                        <li>
                            <a href="{{url('/doctor_profile')}}">
                                <i class="fas fa-user-cog"></i>
                                <span>Profile Settings</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="social-media.html">
                                <i class="fas fa-share-alt"></i>
                                <span>Social Media</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="{{url('change_password')}}">
                                <i class="fas fa-lock"></i>
                                <span>Change Password</span>
                            </a>
                        </li> -->
                        <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /Profile Sidebar -->

    </div>
    