<!DOCTYPE html>

<html lang="en">

<head>

    <!-- ==============================================
    Basic Page Needs
    =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <title>Truck Reservation</title>

    <meta name="description" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
    <meta name="subject" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
    <meta name="author" content="Codings">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="/assets/images/favicon">
    <link rel="apple-touch-icon" href="/front-assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/front-assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/front-assets/images/apple-touch-icon-114x114.png">

    <!-- ==============================================
    Vendor Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="/front-assets/css/vendor/bootstrap5.min.css">
    <link rel="stylesheet" href="/front-assets/css/vendor/slider.min.css">
    <link rel="stylesheet" href="/front-assets/css/main.css">
    <link rel="stylesheet" href="/front-assets/css/vendor/icons.min.css">
    <link rel="stylesheet" href="/front-assets/css/vendor/animation.min.css">
    <link rel="stylesheet" href="/front-assets/css/vendor/gallery.min.css">
    <link rel="stylesheet" href="/front-assets/css/vendor/cookie-notice.min.css">

    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="/front-assets/css/default.css">
    <link rel="stylesheet" href="/front-assets/css/theme-orange.css">

    <!-- ==============================================
    Theme Settings
    =============================================== -->
    <style>
        :root {
            --header-bg-color: #f5f5f5;
            --nav-item-color: #2f323a;
            --top-nav-item-color: #2f323a;
            --hero-bg-color: #f5f5f5;

            --section-1-bg-color: #eeeeee;
            --section-2-bg-color: #e5e5e5;
            --section-3-bg-color: #f5f5f5;
            --section-4-bg-color: #eeeeee;
            --section-5-bg-color: #e5e5e5;
            --section-6-bg-color: #f5f5f5;
            --section-7-bg-color: #eeeeee;

            --footer-bg-color: #191919;
        }
    </style>

</head>

<body>

<!-- Header -->
<header id="header">

    <!-- Navbar -->
    <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
        <div class="container header">

            <!-- Navbar Brand-->
            <a class="navbar-brand" href="/">
                Let's Move
{{--                    <img src="/assets/images/truckIcon.png" alt="logo">--}}
            </a>

            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items -->
            <ul class="navbar-nav items">
                <li class="nav-item"><a href="{{route('index')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'index' ? 'active': ''}}" href="{{route('about-us')}}">Home</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'contact' ? 'active': ''}}">Contact</a></li>
            </ul>

            <!-- Navbar Icons -->
{{--            <ul class="navbar-nav icons">--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link" data-toggle="modal" data-target="#search">--}}
{{--                        <i class="icon-magnifier"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item social">--}}
{{--                    <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item social">--}}
{{--                    <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>--}}
{{--                </li>--}}
{{--            </ul>--}}

            <!-- Navbar Toggle -->
            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="icon-menu m-0"></i>
                    </a>
                </li>
            </ul>

            <!-- Navbar Action -->
            <ul class="navbar-nav action">
                <li class="nav-item ml-3">
                    <a href="{{route('quotation')}}" class="btn ml-lg-auto primary-button"><i class="icon-rocket"></i>Get Started</a>
                </li>
                <li class="nav-item ml-3">
                    <a href="{{route('login')}}" class="btn ml-lg-auto primary-button"><i class="icon-rocket"></i>Login</a>
                </li>
            </ul>
        </div>
    </nav>

</header>
