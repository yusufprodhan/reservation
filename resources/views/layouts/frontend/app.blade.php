@include('layouts.frontend.header')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

@yield('title')
@include('include.flash_message')
@yield('content')

<!-- end main content-->
@include('layouts.frontend.footer')
