@extends('layouts.frontend.app')

@section('content')


    <!-- Slider -->
    <section id="slider" class="hero p-0 odd">
        <div class="swiper-container full-slider featured animation slider-h-100">
            <div class="swiper-wrapper">

                <!-- Item 1 -->
                <div class="swiper-slide slide-center">
                    <img data-aos="zoom-out-up" data-aos-delay="800" src="/front-assets/images/home/slider/s3.jpeg" class="hero-image" alt="Hero Image">
                    <div class="slide-content row" data-mask-768="70">
                        <div class="col-12 d-flex inner">
                            <div class="left align-self-center text-center text-md-left">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Business Moving.</h1>
                                <p data-aos="zoom-out-up" data-aos-delay="800" class="description"> It's an internal office move or you need to relocate hundreds of employees, our comprehensive business moving services will get the job done right.</p>
                                <a href="{{route('quotation')}}" class="btn ml-lg-auto primary-button"><i class="icon-rocket"></i>Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="swiper-slide slide-center">
                    <img data-aos="zoom-out-up" data-aos-delay="800" src="/front-assets/images/home/slider/s1.jpeg" class="hero-image" alt="Hero Image">
                    <div class="slide-content row" data-mask-768="70">
                        <div class="col-12 d-flex inner">
                            <div class="left align-self-center text-center text-md-left">
                                <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Local Home Moving.</h2>
                                <p data-aos="zoom-out-up" data-aos-delay="800" class="description">We move people to and from homes, apartments, condominiums, and everything in between.</p>
                                <a href="{{route('quotation')}}" class="btn ml-lg-auto primary-button"><i class="icon-rocket"></i>Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="swiper-slide slide-center">
                    <img data-aos="zoom-out-up" data-aos-delay="800" src="/front-assets/images/home/slider/s2.jpeg" class="hero-image" alt="Hero Image">
                    <div class="slide-content row" data-mask-768="70">
                        <div class="col-12 d-flex inner">
                            <div class="left align-self-center text-center text-md-left">
                                <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Long Distance<br> Movers.</h2>
                                <p data-aos="zoom-out-up" data-aos-delay="800" class="description">We are here to help with a variety of moving services that will take the stress out of your long-distance move.</p>
                                <a href="{{route('quotation')}}" class="btn ml-lg-auto primary-button"><i class="icon-rocket"></i>Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- End Slider -->


    <!-- Features -->
    <section id="features" class="section-1 offers">
        <div class="container">
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 item" data-aos="zoom-out" data-aos-delay="500">
                    <div class="card no-hover">
                        <i class="icon icon-bag"></i>
                        <h5>Moving Boxes and Supplies</h5>
                        <p>We offer a wide selection of competitively priced moving boxes and packing supplies including bubble wrap, packing tape, packing paper, markers, paper pads, and stretch wrap. We also offer.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-bell"></i>
                        <h5>Packing Services</h5>
                        <p>A successful move starts with a successful packing job. Proper packing paper, padding and boxing procedures are vital to protect your belongings.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-rocket"></i>
                        <h5>Storage Service</h5>
                        <p>Whether you need storage for a month or a year, we have you covered. So if you’re in between homes, completing home renovations, or just need a place for items that won’t fit inside your home.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About [video] -->
    <section id="video" class="section-3 highlights image-left">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <a href="/front-assets/images/home/Home3.png">
                        <div class="mask-radius"></div>
                        <img src="/front-assets/images/home/Home3.png" class="fit-image" alt="Institutional">
                    </a>
                </div>
                <div class="col-12 col-md-6 pl-md-5">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt">Get Editing Done In Simple Steps</h3>
                            <p>Create your account, send images to us, and download edited images on the allotted time - it's that simple</p>
                        </div>
                    </div>
                    <div class="row items">
                        <div class="col-12 p-0">
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-rocket"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Place Quotation</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Fill up form, write instructions and send the quotation</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-call-in"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Confirmed Your Quotation</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Our support team will confirm your quotation.</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-credit-card"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Make Payment</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Pay against your confirmed quotation and relax.</p>
                                </div>
                            </div>
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

