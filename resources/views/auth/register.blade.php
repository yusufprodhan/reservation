<!doctype html>
<html lang="en" >

<head>

    <meta charset="utf-8" />
    <title>Register | PIX Clipping Ltd</title>
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
                            <h5 class="text-white font-size-20">Free Register</h5>
                            <p class="text-white-50 mb-0">Get your free  PIX Clipping account now.</p>
                            <a href="index.html" class="logo logo-admin mt-4">
                                <img src="/assets/images/logo-light.jpeg" alt="" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="p-2">
                                    <form method="POST" class="form-horizontal" action="{{ route('register') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="name">{{ __('Name') }}</label>
                                            <input id="name" type="text"
                                                   class="form-control @error('name') is-invalid @enderror" name="name"
                                                   value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                                   value="{{ old('email') }}" required autocomplete="email">

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
                                                   required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                   name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary w-100 waves-effect waves-light"
                                                    type="submit">{{ __('Register') }}</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="mt-5 text-center">
                                    <p>Already have an account ? <a href="{{'login'}}" class="fw-medium text-primary">Login</a> </p>
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


