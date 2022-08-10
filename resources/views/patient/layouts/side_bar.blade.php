

	            <!-- Profile Sidebar -->
	            <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
	                <div class="profile-sidebar">
	                    <div class="widget-profile pro-widget-content">
	                        <div class="profile-info-widget">
	                            <a href="#" class="booking-doc-img">
	                                <img src="images/{{Auth::user()->profile->image ?? ''}}" alt="User Image">
	                            </a>
	                            <div class="profile-det-info">
	                                <h3>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>
	                                <div class="patient-details">
	                                    <h5><i class="fas fa-birthday-cake"></i> {{Auth::user()->email}} </h5>
	                                    <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> {{Auth::user()->profile->address ?? ''}}</h5>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="dashboard-widget">
	                        <nav class="dashboard-menu">
	                            <ul>
	                                <li class="active">
	                                    <a href="{{url('patient')}}">
	                                        <i class="fas fa-columns"></i>
	                                        <span>Dashboard</span>
	                                    </a>
	                                </li>

	                                <li>
	                                    <a href="{{url('patient_profile_setting')}}">
	                                        <i class="fas fa-user-cog"></i>
	                                        <span>Profile Settings</span>
	                                    </a>
	                                </li>
	                                <!-- <li>
	                                    <a href="{{url('/password_setting')}}">
	                                        <i class="fas fa-lock"></i>
	                                        <span>Change Password</span>
	                                    </a>
	                                </li> -->
	                                <li>
	                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
	            </div>
	            <!-- / Profile Sidebar -->
