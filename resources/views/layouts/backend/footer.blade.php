</div>
<!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->

<!-- Right Sidebar -->
<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body rightbar">
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end" data-bs-dismiss="offcanvas" aria-label="Close" >
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"  />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
                </div>

            </div>
            <!-- end slimscroll-menu-->
        </div>
    </div>

</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<!-- JAVASCRIPT -->
<script src="{!! asset('/assets/libs/jquery/jquery.min.js') !!}"></script>
<script src="{!! asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<script src="{!! asset('/assets/libs/metismenu/metisMenu.min.js') !!}"></script>
<script src="{!! asset('/assets/libs/simplebar/simplebar.min.js') !!}"></script>
<script src="{!! asset('/assets/libs/node-waves/waves.min.js') !!}"></script>
<script src="{!! asset('/assets/libs/jquery-sparkline/jquery.sparkline.min.js') !!}"></script>

<!-- apexcharts -->
<script src="{!! asset('/assets/libs/apexcharts/apexcharts.min.js') !!}"></script>

<!-- jquery.vectormap map -->
<script src="{!! asset('/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
<script src="{!! asset('/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') !!}"></script>
<script src="{!! asset('/assets/js/pages/dashboard.init.js') !!}"></script>

{{-- page script --}}
@yield('page-script')

{{--app js--}}
<script src="{!! asset('/assets/js/app.js') !!}"></script>

</body>

</html>
