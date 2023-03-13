<!DOCTYPE html>
<html lang="en">

<!-- doccure/doctor-dashboard.html  30 Nov 2019 04:12:03 GMT -->

<head>
	<meta charset="utf-8">
	<title>DoctorCare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<!-- Favicons -->
	<link href="{{asset('assets/img/favicon.png')}}" rel="icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
			<script src="{{asset('assets/js/respond.min.js')}}"></script>
		<![endif]-->

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

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
							<a href="#">Home</a>
						</li>
						<li class="has-submenu active">
							<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>

						</li>
						<li class="has-submenu">
							<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
						</li>
						<!-- <li class="has-submenu">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="voice-call.html">Voice Call</a></li>
									<li><a href="video-call.html">Video Call</a></li>
									<li><a href="search.html">Search Doctors</a></li>
									<li><a href="calendar.html">Calendar</a></li>
									<li><a href="components.html">Components</a></li>
									<li class="has-submenu">
										<a href="invoices.html">Invoices</a>
										<ul class="submenu">
											<li><a href="invoices.html">Invoices</a></li>
											<li><a href="invoice-view.html">Invoice View</a></li>
										</ul>
									</li>
									<li><a href="blank-page.html">Starter Page</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li> -->
						<li>
							<a href="#" target="_blank">Admin</a>
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
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="images/{{Auth::user()->profile->image?? ''}}" width="31" alt="zaryab"></span>
						</a>
						<div class="dropdown-menu">
							<!-- <div class="user-header">
								<div class="avatar avatar-sm">
									<img src="images/{{Auth::user()->profile->image?? ''}}" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h6>
									<p class="text-muted mb-0">{{Auth::user()->email}}</p>
								</div>
							</div> -->
							<!-- <a class="dropdown-item" href="#">My Profile</a> -->
							<!-- <a class="dropdown-item" href="#">Settings</a> -->
							<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
						</div>
					</li>
				</ul>
			</nav>
		</header>
		<!-- /Header -->
	</div>	