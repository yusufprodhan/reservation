<!doctype html>
<html lang="en" >

<head>

    <meta charset="utf-8" />
    <title>Login | PIX Clipping Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon">

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style"  rel="stylesheet" type="text/css" />

</head>

<body>

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-login text-center">
                        <div class="bg-login-overlay"></div>
                        <div class="position-relative">
                            <h5 class="text-white font-size-20">Welcome Back !</h5>
                            <p class="text-white-50 mb-0">Sign in to continue to PIX Clipping.</p>
                            <a href="index.html" class="logo logo-admin mt-4">
                                <img src="/assets/images/logo-light.jpeg" alt="" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                @include('include.flash_message')
                                <div class="p-2">
                                    <form class="tox-form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password">{{ __('Password') }}</label>
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                                   required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-check row">
                                            <input class="form-check-input col-2" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="col-10 form-check-label d-inline-block ml" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">
                                                {{__('Log In')}}
                                            </button>
                                        </div>
                                        {{--                                <div class="mt-4 text-center">--}}
                                        {{--                                    @if (Route::has('password.request'))--}}
                                        {{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--                                            <i class="mdi mdi-lock me-1"></i> {{ __('Forgot Your Password?') }}--}}
                                        {{--                                        </a>--}}
                                        {{--                                    @endif--}}
                                        {{--                                </div>--}}
                                    </form>
                                </div>
                                <div class="mt-5 text-center">
                                    <p>Don't have an account ?
                                        <a href="{{route('register')}}" class="fw-medium text-primary"> Signup </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">

    </div>
</div>

<!-- JAVASCRIPT -->
<script src="/assets/libs/jquery/jquery.min.js"></script>
<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/assets/libs/node-waves/waves.min.js"></script>
<script src="/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

<script src="/assets/js/app.js"></script>

</body>

</html>

