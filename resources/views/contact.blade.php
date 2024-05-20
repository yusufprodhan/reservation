@extends('layouts.frontend.app')

@section('content')
    @include('layouts.frontend.hero_section')

    <!-- Contacts -->
    <section id="contacts" class="section-1 offers">
        <div class="container">
            <div class="row intro">
                <div class="col-12 col-md-9 text-md-left">
                    <h2 class="featured">How Can We Help?</h2>
                    <p>Talk to one of our consultants today and learn how to start leveraging your business.</p>
                </div>
{{--                <div class="col-12 col-md-3 align-self-end">--}}
{{--                    <a href="#contact" class="smooth-anchor btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-speech"></i>GET IN TOUCH</a>--}}
{{--                </div>--}}
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
@endsection
