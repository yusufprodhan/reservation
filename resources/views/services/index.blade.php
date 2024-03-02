@extends('layouts.frontend.app')

@section('content')
    @include('layouts.frontend.hero_section')

    <!-- Services -->
    <section id="portfolio-grid" class="showcase portfolio blog-grid filter-section featured">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h3 class="mb-0">Get Editing Services Done Effortlessly</h3>
                        <p class="mt-2">Choose photo editing services you are looking for to make your images outstanding and enhance perfection</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <!-- Nav tabs -->
                    <div class="">
                        <ul class="nav nav-tabs nav-fill" style="box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px; padding: 0px 10px;">
                            <li class="nav-item">
                                <a class="nav-link active flex" data-bs-toggle="tab" href="#editing">
                                    <i class="icon icon-pencil d-inline-block"></i> Editing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#retouching"><i class="icon icon-layers d-inline-block"></i> Retouching</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#ecommerce"><i class="icon icon-basket d-inline-block"></i> E-commerce</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#photography"><i class="icon icon-camera d-inline-block"></i> Photography</a>
                            </li>
                        </ul>
                    </div>


                    <!-- Tab panes -->
                    <div class="tab-content mt-5">
                        <div class="tab-pane container active" id="editing">
                            <div class="row justify-content-center text-center items">
                                <div class="col-12 col-md-6 col-lg-4 item">
                                    <div class="card featured">
                                        <i class="icon icon-globe"></i>
                                        <h4>Clipping Path</h4>
                                        <p>Cut out the subject with shape by hand-drawn photo clipping service.</p>
                                        <a href="{{route('services.slug','clipping-path')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 item">
                                    <div class="card">
                                        <i class="icon icon-basket"></i>
                                        <h4>E-Commerce</h4>
                                        <p>Increase your sales with an incredible online store, full of features and functionality.</p>
                                        <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 item">
                                    <div class="card">
                                        <i class="icon icon-screen-smartphone"></i>
                                        <h4>Mobile Apps</h4>
                                        <p>Follow the global trend and create your revolutionary mobile app built with the best technologies.</p>
                                        <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 item">
                                    <div class="card">
                                        <i class="icon icon-layers"></i>
                                        <h4>Web Application</h4>
                                        <p>We build applications for different purposes using technologies that allow you more security.</p>
                                        <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 item">
                                    <div class="card">
                                        <i class="icon icon-chart"></i>
                                        <h4>Digital Marketing</h4>
                                        <p>We work to promote your brand in partnership with the best marketing platforms today.</p>
                                        <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 item">
                                    <div class="card featured">
                                        <i class="icon icon-bulb"></i>
                                        <h4>Brand Creation</h4>
                                        <p>We create your brand thinking about your target audience using design techniques.</p>
                                        <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="retouching">Retouching</div>
                        <div class="tab-pane container fade" id="ecommerce">E-commerce</div>
                        <div class="tab-pane container fade" id="photography">Photography</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section id="partner" class="section-2">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h3 class="mb-0">Our Partners</h3>
                        <p class="mt-2">Choose photo editing services you are looking for to make your images outstanding and enhance perfection</p>
                    </div>
                </div>
                <div class="swiper-container min-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-1.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-2.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-3.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-4.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-5.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-6.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-7.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-8.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('page-script')
    <script>
        $(function (){
            $(document).find('input[value=editing]').parent().click()
        })
    </script>
@endsection
