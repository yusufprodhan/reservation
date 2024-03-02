@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class="bg-white highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="/front-assets/images/home/Home1.png" class="fit-image" alt="Jewelry Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-black">Bring Natural <span class="text-primary">Texture</span></h2>
                            <p>Retouch your jewelry photos for branding-quality display. Customize your retouching needs, costs & timing to make business easy.</p>
                            <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">FREE TRAIL <i class="icon-arrow-right"></i></a>
                            <a href="#" target="_blank" class="btn btn-outline-primary border-1 d-inline-block">GET STARTED <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Features -->
    <section id="features" class="section-1 offers">
        <div class="container">
            <div class="row items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-pencil"></i>
                        <h5>250 a day</h5>
                        <p>Introducing our seamless bulk jewelry image retouching service, without any interruptions.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-menu"></i>
                        <h5>24 Hours</h5>
                        <p>Experience the efficiency of our services. Receive your photos within a mere 24 hours.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-rocket"></i>
                        <h5>5 free</h5>
                        <p>Experience ultimate customer satisfaction with our free revisions for guaranteed content perfection.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sophisticated -->
    <section class="" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(116,15,142,1) 0%, rgba(4,98,17,1) 100%);">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <style>
                        h1{
                            font-size: 4rem;
                        }
                    </style>
                    <h1 class="text-white d-inline-block me-2">Get </h1>
                    <h1 class="d-inline-block" style="color: yellow"> Crisp &</h1> <br/>
                    <h1 class="d-inline-block" style="color: yellow">Sophisticated</h1><br/>
                    <h1 class="text-white"> Jewelry Editing</h1>
                </div>
                <div class="col-6 text-white">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <p>Color Clipping has been providing jewelry retouching services to renowned jewelry brands and photographers. We have been serving clients from around the globe for over a decade. We believe in growth and focus on upscaling the retouching quality constantly.</p>
                            <h4 class="featured alt text-white">Lets see what is included in jewelry retouching</h4>
                            <ol style="list-style-type:disclosure-closed">
                                <li>Background editing</li>
                                <li>Metal smoothing, Neutralizing & desaturating</li>
                                <li>Dust/reflection removal & nice reduction</li>
                                <li>Total cleaning, Color correction & recoloring</li>
                                <li>Changing gold and gemstone color, removing color cast</li>
                                <li>Neutralizing & Shine enhancement of diamonds & stones</li>
                                <li>Drop shadow and mirror effect, Creative jewelry editing</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class=" featured">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h3 class="mb-0">Jewelry Photo Retouching for Credible Visuals</h3>
                        <p class="mt-2">Your customer wants to see photos they can rely on for a successful purchase.Color Clipping retouch to reach that goal.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/home/services/jewelry-retouch-service/jewelry-retouch2.png" class="fit-image" alt="Jewelry Retouch">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h4>Why do you need jewelry image retouching?</h4>
                                <p>A perfect jewelry photo captivates viewer's attention & strikes their dopamine release. If your photo is in skilled editor's hand, it will touch the audience surely</p>
                                <p>Jewelry can have invisible sports that your bare eyes can't trace. But marco lenses catch them loudly. The color & shine also gets changed while being captured. If these flaws are not edited, the images will simply fail. In retouching, everything must be done efficiently.</p>
                                <p>"Oh", how stunning will she look in it! And that connection does the conversion.</p>
                                <p>Kickstart your sales with PIX Clipping.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="section-2">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h3 class="mb-0">Bring out the Exact Color & Tone</h3>
                        <p class="mt-2">We know how to give the best touch up to your images. Have a tour of our recently polished jewelry photo collection.</p>
                    </div>
                </div>
                <div class="swiper-container min-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/home/services/CG1.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/home/services/CG2.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/home/services/CG1.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/home/services/CG2.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/home/services/CG1.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/home/services/CG2.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/home/services/CG1.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/home/services/CG2.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="section-1">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h3>Value-based Pricing for Jewelry Retouching Services</h3>
                    <p>We offer standard pricing to maintain the best quality. It's affordable, and you can customize orders as per your priority. No hidden or extra cost.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 align-self-end text-center item">
                    <div class="card">
                        <i class="icon icon-handbag"></i>
                        <h4>Simple</h4>
                        <span class="price">$3.50 - $4.99</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Les design and simple edge</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Single diamond</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Single gemstone</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                        </ul>
                        <a href="#" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>See Sample</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-end text-center item">
                    <div class="card">
                        <i class="icon icon-fire"></i>
                        <h4>Medium</h4>
                        <span class="price">$5.00 - $8.99</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Curvy design</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Multiple edges</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Two colors</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Double diamond</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Double gemstone</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>

                        </ul>
                        <a href="#" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>See Sample</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-end text-center item">
                    <div class="card">
                        <i class="icon icon-diamond"></i>
                        <h4>Complex</h4>
                        <span class="price">Talk to us</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Complex design</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Group of Jewelry </span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Numerous edge</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Most colors</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Multiple diamonds</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Multiple gemstones</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Long chain</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Cluster ring</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                        </ul>
                        <a href="#" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>See Sample</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interest to online -->
    <section class="text-white" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(12,61,115,1) 0%, rgba(70,135,246,1) 100%);">
        <div class="container">
            <div class="row  align-items-center text-center">
                <div class="col-7">
                    <div class="row align-items-center">
                        <div class="col-1">
                            <i class="icon icon-social-skype d-inline-block"></i>
                        </div>
                        <div class="col-11">
                            <h3 class="mb-1 text-white">Interested To Meet Us Online?</h3>
                            <p class="mt-1">Discover us before you start working with us. Through video call, we will show your our production office, explain working process and discuss facilities that you'll receive. Take this great chance to meet us now.</p>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">Request Virtual Tour <i class="icon-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Dedicated to exceeding expectation-->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="text-black">What is our <span class="text-primary">Specialty?</span></h3>
                            <p>At PIX Clipping, we bring features into being for quality-driven client services. We explore, we thrive on and we provide services for the user benefits.</p>
                        </div>
                    </div>
                    <div class="row items">
                        <strong>Features: </strong>
                        <div class="col-6 p-0">
                            <ol style="list-style-type:circle">
                                <li>Simple UX-UI</li>
                                <li>Reusable Upload</li>
                                <li>Email Notification</li>
                            </ol>
                        </div>
                        <div class="col-6 p-0">
                            <ol style="list-style-type:circle">
                                <li>Easy Sorting</li>
                                <li>On fly Navigation</li>
                                <li>Live Order Status</li>
                            </ol>
                        </div>
                    </div>
                    <a href="{{route('register')}}" target="_blank" class="btn primary-button d-inline-block mt-3">Create Account <i class="icon-arrow-right"></i></a>
                </div>
                <div class="col-12 col-md-7">
                    <a href="/front-assets/images/home/Home2.png">
                        <img src="/front-assets/images/home/Home2.png" class="fit-image" alt="About Us">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white" style="background-color: #303a6e;">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <p>We are dedicated to editing photos in your style and <strong>enhancing perfection</strong></p>
                </div>
                <div class="col-4">
                    <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">FREE TRAIL <i class="icon-arrow-right"></i></a>
                    <a href="#" target="_blank" class="btn btn-outline-warning border-1 d-inline-block">GET STARTED <i class="icon-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('page-script')

@endsection
