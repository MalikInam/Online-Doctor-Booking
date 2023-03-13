<!DOCTYPE html>
<html lang="en">

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->

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

                        <!-- Login Tab Content -->
                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-6 login-left">
                                    <img src="{{asset('assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Login">
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3>Login <span>DoctorCare</span></h3>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group form-focus">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            
												<label class="focus-label">Email</label>
                                                <!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
                                        </div>
                                        <div class="form-group form-focus">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <label class="focus-label">Password</label>
                                            <!-- <i class="fa fa-key" aria-hidden="true"></i> -->
                                        </div>
                                        <!-- <div class="text-right">
                                            <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                        </div> -->
                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or">or</span>
                                        </div>
                                        <!-- <div class="row form-row social-login">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                                            </div>
                                        </div> -->
                                        <div class="text-center dont-have">Don’t have an account? <a href="{{url('register')}}">Register</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Login Tab Content -->

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

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->

</html>