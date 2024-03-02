@extends('layouts.frontend.app')

@section('content')
    @include('layouts.frontend.hero_section')

    <!-- Contacts -->
    <section id="contacts" class="section-1 offers">
        <div class="container">
            <div class="row intro">
                <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                    <h2 class="featured">How Can We Help?</h2>
                    <p>Talk to one of our consultants today and learn how to start leveraging your business.</p>
                </div>
                <div class="col-12 col-md-3 align-self-end">
                    <a href="#contact" class="smooth-anchor btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-speech"></i>GET IN TOUCH</a>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card featured">
                        <i class="icon icon-phone"></i>
                        <h4>+1 123 98765 4321</h4>
                        <p class="mb-1">We answer by phone from Monday to Saturday from 10 am until 6 pm.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-envelope"></i>
                        <h4>hello@business.com</h4>
                        <p class="mb-1">We will respond to your email within 8 hours on business days.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card featured">
                        <i class="icon icon-location-pin"></i>
                        <h4>Office Street, 123</h4>
                        <p class="mb-1">Come visit us from Monday to Friday from 11 am to 4 pm.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom -->
    <section id="custom" class="section-2 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.123073808986!2d12.490042215441486!3d41.89021017922119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61b6532013ad%3A0x28f1c82e908503c4!2sColiseu!5e0!3m2!1spt-BR!2sbr!4v1594148229878!5m2!1spt-BR!2sbr" width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
    </section>

    <!-- Contact -->
    <section id="contact" class="section-3 form">
        <div class="container">
            <form action="php/form.php" id="leverage-form" class="multi-step-form">
                <input type="hidden" name="section" value="leverage_form">

                <input type="hidden" name="reCAPTCHA">
                <!-- Remove this field if you want to disable recaptcha -->

                <div class="row">
                    <div class="col-12 col-md-6 align-self-start text-center text-md-left">

                        <!-- Success Message -->
                        <div class="row success message">
                            <div class="col-12 p-0">
                                <div class="wait">
                                    <div class="spinner-grow" role="status">
                                        <span class="sr-only">Loading</span>
                                    </div>
                                    <h3 class="sending">SENDING</h3>
                                </div>
                                <div class="done">
                                    <i class="icon bigger icon-check"></i>
                                    <h3>Your message was sent successful. Thanks.</h3>
                                    <a href="" class="btn mx-auto primary-button">
                                        <i class="icon-refresh"></i>
                                        REFRESH
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Steps Message -->
                        <div class="row intro form-content">
                            <div class="col-12 p-0">

                                <!-- Step Title -->
                                <div class="step-title">
                                    <h2 class="featured alt">Let's Talk?</h2>
                                    <p>Don't wait until tomorrow. Talk to one of our consultants today and learn how to start leveraging your business.</p>
                                </div>

                                <!-- Step Title -->
                                <div class="step-title">
                                    <h2 class="featured alt">Almost There</h2>
                                    <p>We need some more important information to better understand how we can help you in the best possible way.</p>
                                </div>

                                <!-- Step Title -->
                                <div class="step-title">
                                    <h2 class="featured alt">Are you Ready?</h2>
                                    <p>Tell us a little about the project you need to create. This is valuable so that we can direct you to the ideal team.</p>
                                </div>

                            </div>
                        </div>

                        <!-- Steps Group -->
                        <div class="row text-center form-content">
                            <div class="col-12 p-0">
                                <ul class="progressbar">
                                    <li>Personal Details</li>
                                    <li>Company Budget</li>
                                    <li>Service Setup</li>
                                </ul>

                                <!-- Group 1 -->
                                <fieldset class="step-group">
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input type="email" name="email" data-minlength="3" class="form-control field-email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input type="text" name="name" data-minlength="3" class="form-control field-name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input type="text" name="phone" data-minlength="3" class="form-control field-phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-12 input-group p-0">
                                        <a class="step-next btn primary-button">NEXT<i class="icon-arrow-right-circle left"></i></a>
                                    </div>
                                </fieldset>

                                <!-- Group 2 -->
                                <fieldset class="step-group">
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input type="text" name="company" data-minlength="3" class="form-control field-company" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input type="text" name="manager" data-minlength="3" class="form-control field-manager" placeholder="Manager">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <i class="icon-arrow-down"></i>
                                            <select name="budget" data-minlength="1" class="form-control field-budget">
                                                <option value="" selected disabled>What's your budget range?</option>
                                                <option>Less than $2.000</option>
                                                <option>$2.000 — $5.000</option>
                                                <option>$5.000 — $10.000</option>
                                                <option>$10,000+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 input-group p-0 d-flex justify-content-between justify-content-md-start">
                                        <a class="step-prev btn primary-button mr-4"><i class="icon-arrow-left-circle"></i>PREV</a>
                                        <a class="step-next btn primary-button">NEXT<i class="icon-arrow-right-circle left"></i></a>
                                    </div>
                                </fieldset>

                                <!-- Group 3 -->
                                <fieldset class="step-group">
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <textarea name="message" data-minlength="3" class="form-control field-message" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 input-group p-0 d-flex justify-content-between justify-content-md-start">
                                        <a class="step-prev btn primary-button mr-4"><i class="icon-arrow-left-circle"></i>PREV</a>
                                        <a class="step-next btn primary-button">SEND<i class="icon-arrow-right-circle left"></i></a>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="content-images col-12 col-md-6 pl-md-5 d-none d-md-block">

                        <!-- Step 1 -->
                        <div class="gallery">
                            <a class="step-image" data-poster="/front-assets/images/about-8.jpg" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                                <i class="play-video icon-control-play"></i>
                                <div class="mask-radius"></div>
                                <img src="/front-assets/images/about-8.jpg" class="fit-image" alt="Contact Us">
                            </a>
                        </div>

                        <!-- Step 2 -->
                        <div class="gallery">
                            <a class="step-image" href="/front-assets/images/about-6.jpg">
                                <img src="/front-assets/images/about-6.jpg" class="fit-image" alt="Contact Us">
                            </a>
                        </div>

                        <!-- Step 3 -->
                        <div class="gallery">
                            <a class="step-image" href="/front-assets/images/about-7.jpg">
                                <img src="/front-assets/images/about-7.jpg" class="fit-image" alt="Contact Us">
                            </a>
                        </div>

                        <!-- Step 4 -->
                        <div class="gallery">
                            <a class="step-image" href="/front-assets/images/about-leverage.jpg">
                                <img src="/front-assets/images/about-leverage.jpg" class="fit-image" alt="Contact Us">
                            </a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
