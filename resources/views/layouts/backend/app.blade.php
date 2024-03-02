@include('layouts.backend.header')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <!-- start Page-content -->
    <div class="page-content">
        @yield('title')
        @include('include.flash_message')
        @yield('content')
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © {{ config('app.name') }}.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Develop by First IT Solution
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->
@include('layouts.backend.footer')
