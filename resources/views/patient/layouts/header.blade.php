	<!-- Header -->
		<header class="header">
			<nav class="navbar navbar-expand-lg header-nav">
				<div class="navbar-header">
					<a id="mobile_btn" href="javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
					<a href="index-2.html" class="navbar-brand logo">
					<img style="width: 70px;" src="{{asset('assets/img/logo2.jpg')}}" alt="logo">

					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="index-2.html" class="menu-logo">
							<img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="javascript:void(0);">
							<i class="fas fa-times"></i>
						</a>
					</div>
					<ul class="main-nav">
						<li>
							<a href="{{url('/patient')}}">Home</a>
						</li>
						<li>
							<a href="{{url('/doctor')}}">Doctors </i></a>
						</li>
						<li class="has-submenu active">
							<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="{{url('search_doctor')}}">Search Doctor</a></li>
								<!-- <li><a href="doctor-profile.html">Doctor Profile</a></li> -->
								<!-- <li><a href="{{url('/booking')}}">Booking</a></li> -->
								<!-- <li><a href="checkout.html">Checkout</a></li> -->
								<!-- <li><a href="booking-success.html">Booking Success</a></li> -->
								<!-- <li class="active"><a href="patient-dashboard.html">Patient Dashboard</a></li> -->
								<!-- <li><a href="favourites.html">Favourites</a></li> -->
								<!-- <li><a href="chat.html">Chat</a></li> -->
								<!-- <li><a href="profile-settings.html">Profile Settings</a></li> -->
								<!-- <li><a href="change-password.html">Change Password</a></li> -->
							</ul>
						</li>
						
						<li>
							<a href="{{url('/super_admin')}}" target="_blank">Admin</a>
						</li>
						<li class="login-link">
							<a href="login.html">Login / Signup</a>
						</li>
					</ul>
				</div>
				<ul class="nav header-navbar-rht">
					<li class="nav-item contact-item">
						<div class="header-contact-img">
							<i class="far fa-hospital"></i>
						</div>
						<div class="header-contact-detail">
							<p class="contact-header">Contact</p>
							<p class="contact-info-header"> +92 3156057502</p>
						</div>
					</li>

					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img">
@if(isset(Auth::user()->profile->image))
								<img class="rounded-circle" src="{{asset('images/'.Auth::user()->profile->image ?? '')}}" width="31" alt="Ryan Taylor">
								@endif
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="{{asset('assets/img/patients/patient.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Richard Wilson</h6>
									<p class="text-muted mb-0">Patient</p>
								</div>
							</div>
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
							</a>
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
			</nav>
		</header>
		<!-- /Header -->