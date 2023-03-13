<!DOCTYPE html>
<html lang="en">

<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->

<head>
    <meta charset="utf-8">
    <title>Doccure</title>
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
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

</head>

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-8 offset-md-2">

                        <!-- Register Content -->
                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-6 login-left">
                                    <img src="{{asset('assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Register">
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3> Register</h3>
                                    </div>

                                    <!-- Register Form -->
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <!-- first name -->
                                        <div class="form-group form-focus">
                                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror <label class="focus-label">First Name</label>
                                        </div>
                                        <!-- last name -->
                                        <div class="form-group form-focus">
                                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror <label class="focus-label"> Last Name</label>
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group form-focus">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror <label class="focus-label">Email</label>
                                        </div>
                                        <!-- phone no -->
                                        <!-- <div class="form-group form-focus">
                                            <input id="phone_no" type="number" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no">

                                            @error('phone_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror <label class="focus-label">Phone No</label>
                                        </div> -->
                                        <!-- User Type -->
                                        <div class="form-group form-focus">
                                            <label class="focus-label">User type</label>
                                            <select name="user_type" id="" class="form-control">
                                                <option value="doctor">Doctor</option>
                                                <option value="patient">Patient</option>
                                                <option value="admin">Admin</option>

                                            </select>
                                        </div>

                                        <div class="form-group form-focus">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror <label class="focus-label">Create Password</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> <label class="focus-label">Confirm Password</label>
                                        </div>
                                        <div class="text-right">
                                            <a class="forgot-link" href="login.html">Already have an account?</a>
                                        </div>
                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or">or</span>
                                        </div>
                                        <div class="row form-row social-login">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /Register Form -->

                                </div>
                            </div>
                        </div>
                        <!-- /Register Content -->

                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/script.js')}}"></script>

</body>

<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->

</html>