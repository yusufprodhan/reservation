<!doctype html>
<html lang="en" >

<head>

    <meta charset="utf-8" />
    <title>Free Register | {{env('APP_NAME')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="PIX Clipping" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

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
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body text-center">
                        <span style="font-size: 70px; color: white; background: green; border-radius: 50%; padding: 10px 16px;"><i class="mdi mdi-check-bold"></i></span>
                        <h1>Verify Successfully</h1>
                        <p class="font-size-18">You successfully verify your email.</p>
                        <p>Thank you for being with PIX Clipping Ltd.</p>
                        <a class="btn btn-success" href="{{route('login')}}" style="background: #008013"> <i class="mdi mdi-eye text-white font-size-22" style="position: relative; top: 3px;"></i> {{__('Login')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
