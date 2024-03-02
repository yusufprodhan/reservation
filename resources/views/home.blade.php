@extends('layouts.frontend.app')

@section('content')

    <!-- Hero -->
    <section id="slider" class="hero p-0 featured left">
        <div class="swiper-container no-slider animation slider-h-100">
            <div class="swiper-wrapper">
                <!-- Item 1 -->
                <div class="swiper-slide slide-center">
                    <img data-aos="zoom-out-up" data-aos-delay="800" src="/front-assets/images/home/homehero.png" class="hero-image" alt="Hero Image">
                    <div class="slide-content row" data-mask-768="80">
                        <div class="col-12 d-flex inner">
                            <div class="left">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Maximise Efficiency</h1>
                                <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Affordable Photo Post-Processing. Elevate your business by freeing up time from photo editing services. Our dedicated team works tirelessly to boost your workflow speed.</p>
                                <a href="{{route('register')}}" target="_blank" class="btn primary-button"><i class="icon-cup"></i>GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="section-1 offers">
        <div class="container">
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 item" data-aos="zoom-out" data-aos-delay="500">
                    <div class="card no-hover">
                        <i class="icon icon-pencil"></i>
                        <h5>Tailored Editing Solutions</h5>
                        <p>Get precise, customised photo editing services that meet your exact specifications while maintaining exceptional quality.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-menu"></i>
                        <h5>Simplified Dashboard Experience</h5>
                        <p>Effortlessly Manage Your Orders in One Convenient Location .</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-rocket"></i>
                        <h5>Instant Support</h5>
                        <p>Connect with Our Rapid-Response Support Representative in Just 10 Seconds .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dedicated to exceeding expectation-->
    <section id="about" class="section-2 highlights image-right">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt">Dedicated to Exceeding Expectation.</h3>
                            <p>Pix Clipping is dedicated to saving time for photographers, agencies, and studio owners through our expert photo retouching services. With a track record of editing over 1 million images, we have proudly served more than 500 satisfied clients worldwide. Trust us to assist you with exceptional photo retouching services that enhance the visual appeal of your work.</p>
                        </div>
                    </div>
                    <div class="row items">
                        <div class="col-12 p-0">
                            <ol style="list-style-type:disclosure-closed; float: left;text-align: left;">
                                <li>Retouch as necessary</li>
                                <li>Save time when editing.</li>
                                <li>Send out pictures on schedule.</li>
                                <li>affordable pricing</li>
                                <li>24/7 live assistance</li>
                                <li>safe payment portal</li>
                                <li>Work based on projects</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <a href="/front-assets/images/home/Homepage1.png">
                        <img src="/front-assets/images/home/Homepage1.png" class="fit-image rounded" alt="Dedicated to Exceeding Expectation">
                    </a>
                </div>
            </div>
        </div>
    </section>

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
                <div class="row">
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
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','clipping-path')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Clipping Path</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Cut out the subject with shape by hand-drawn photo clipping service.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','background-remove')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Background Remove</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Remove distracting background from images to focus on the subject.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','shadow-making')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Shadow Making</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Create shadow to make images more realistic and natural-looking.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','image-masking')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Image Masking</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Mask hair, fur, fine details of subjects to get clean & sharp images.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="/front-assets/images/home/hometab.png" class="fit-image" alt="editing" style="height: 100%">
                                </div>
                                <div class="col-4">
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','ghost-mannequin')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Ghost Mannequin</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Remove mannequin to a tailored fit to catch viewers attention.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','multi-clipping-path')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Multi Clipping Path</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Extract colors, objects and parts within an image as you need.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','photo-recoloring')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Photo Recoloring</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Capture one photo, recolor images in many colors as you want.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','school-photo-editing')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">School Photo Editing</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Retouch portrait or group photos of school student with your style.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="retouching">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','photo-retouching')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Photo Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Get retouched images by Advanced adjustment as you need.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','jewelry-retouch')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Jewelry Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Receive shiny and crisp photos with natural details intact.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','shadow-making')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Product Photo Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Retouch as you require for stunning look in product photos.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','image-masking')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Beauty Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Catch the viewers attention with a glamorous look in images.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="/front-assets/images/home/services/Editing.png" class="fit-image" alt="editing" style="height: 75%">
                                </div>
                                <div class="col-4">
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','headshot-retouching')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Headshot Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Get corporate/editorial headshot photos with perfect look.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','newborn-baby-photo-editing')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Newborn Baby Photo Editing</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Correct red skin & imperfections for lovely child images.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','food-photo-retouching')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Food Photo Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Bring the appetizing look on food images as you want.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','school-photo-editing')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Real Estate Photo Editing</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Represent infrastructures, buildings & interiors attractively.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="ecommerce">
                            <div class="row">
                                <div class="col-8">
                                    <img src="/front-assets/images/home/ecommerce-service.png" class="fit-image" alt="editing" style="width: 90%">
                                </div>
                                <div class="col-4">
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','headshot-retouching')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Essential Editing</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">We provided complete e-commerce editing as per your preferences.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','newborn-baby-photo-editing')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Amazon, e-Bay, Shopify Ready</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Retouch as the image requirements of eCommerce marketplaces.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','food-photo-retouching')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">E-commerce 360 degree editing</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Create symmetrical 360 degree product image adjusting its perspective.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','school-photo-editing')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Image Optimization</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Get web-ready images as per your customized requirements.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="photography">
                            <div class="row">
                                <div class="col-8">
                                    <img src="/front-assets/images/home/services/Editing.png" class="fit-image" alt="editing" style="width: 65%">
                                </div>
                                <div class="col-4">
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','headshot-retouching')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Product Photography</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">We capture product photos keeping its color and natural details.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','newborn-baby-photo-editing')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Apparels Photography</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Need your brand with our professional apparel photography.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','food-photo-retouching')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">Jewelry Photography</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">Capture luxurious jewelry ornaments images.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon icon-globe" style="position: relative; top:40px; left: 10px"></i>
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','school-photo-editing')}}"><h4 class="text-red-500" style="color: #fc5130; margin: 10px 0px 10px 0px; text-align: left;">School Photography</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;">We shoot portraits or groups for entire school in your preferred style.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pricing -->
    <section id="pricing" class="section-1 plans">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h3>Choose Your Right Editing Options</h3>
                    <p class="text-max-800">Select the right plan for your that matches your budget, TAT and services. We are open to discuss any of your demands</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card">
                        <i class="icon icon-handbag"></i>
                        <h4>Free</h4>
                        <span class="price"><i>$</i>00</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>First Image for any service</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Delivery within 12 hours</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Quick Response</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Not Credit card required</span>
                                <i class="icon-min m-0 icon-close text-right"></i>
                            </li>
                        </ul>
                        <a href="#" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>Get Free Trial</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card">
                        <i class="icon icon-fire"></i>
                        <h4>Standard</h4>
                        <span class="price"><i>$</i>0.29</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>On Demand editing</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>On-time delivery</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Free revision</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Guaranteed Quality</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>

                        </ul>
                        <a href="{{route('login')}}" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>ORDER NOW</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card">
                        <i class="icon icon-diamond"></i>
                        <h4>Big Volume Project</h4>
                        <span class="price"><i>$</i>00</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Dedicated Manager</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Priority Customer</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Unlimited revisions</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Flexible pay period</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                        </ul>
                        <a href="{{route('contact')}}" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>Project Proposal</a>
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
                                    <i class="icon icon-trophy"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Place order</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Fill up form, write instructions and select images to create order</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-diamond"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Make Payment</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Pay against your order Invoice to start image processing and relax.</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-cloud-download"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Download Output</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Download the final edited images and give us your feedback.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section id="testimonials" class="section-4 carousel">
        <div class="overflow-holder">
            <div class="container overflow-hidden">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h3 >Customer Testimonials</h3>
                        <p class="text-max-800">Our customers are satisfied with the work we do. The greatest gratification is to receive recognition for what we have built. This motivates us to improve even more.</p>
                    </div>
                </div>
                <div class="swiper-container mid-slider items">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card">
                                <div class="col-12">
                                    <img src="/front-assets/images/team-1.jpg" alt="Adams Baker" class="person">
                                    <h4>Adams Baker</h4>
                                    <p>My website looks amazing with the Leverage Theme.</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card">
                                <div class="col-12">
                                    <img src="/front-assets/images/team-2.jpg" alt="Mary Evans" class="person">
                                    <h4>Mary Evans</h4>
                                    <p>This company created an exclusive form. Fantastic.</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card">
                                <div class="col-12">
                                    <img src="/front-assets/images/team-3.jpg" alt="Sarah Lopez" class="person">
                                    <h4>Sarah Lopez</h4>
                                    <p>I'm loving the partnership. The support deserves 5 stars.</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card">
                                <div class="col-12">
                                    <img src="/front-assets/images/team-4.jpg" alt="Joseph Hills" class="person">
                                    <h4>Joseph Hills</h4>
                                    <p>My app was perfect. I will request more services soon.</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card">
                                <div class="col-12">
                                    <img src="/front-assets/images/team-5.jpg" alt="Karen Usman" class="person">
                                    <h4>Karen Usman</h4>
                                    <p>I had small problems with the payment, but it was resolved.</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dedicated to exceeding expectation-->
    <section id="about" class="section-2 highlights image-right">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <a href="/front-assets/images/home/Homepage2.png">
                        <img src="/front-assets/images/home/Homepage2.png" class="fit-image" alt="About Us">
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt">Use our portal at ease</h3>
                            <p>We have designed our portal with lots of user-focused features so that you can complete the order easily.Give it a try to efficient Portal Service to speed up your business</p>
                        </div>
                    </div>
                    <div class="row items">
                        <strong>Features: </strong>
                        <div class="col-12 p-0">
                            <ol style="list-style-type:circle">
                                <li>Simple user interface</li>
                                <li>On fly navigation</li>
                                <li>Presumable upload</li>
                                <li>Quick access dashboard</li>
                                <li>Big size image upload</li>
                                <li>Live order status</li>
                                <li>Easy sorting, quick search</li>
                                <li>Separate billing profile</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('action-blog')
@endsection

@section('page-script')
    <script>
        $(function (){
            $(document).find('input[value=editing]').parent().click()
        })

    </script>
@endsection

