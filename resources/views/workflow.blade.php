@extends('layouts.frontend.app')

@section('content')
    <!-- Hero part-->
    <section class="bg-white highlights image-right">
        <div class="container">
            <div class="row align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="500">
                <div class="col-2"></div>
                <div class="col-8 mt-5">
                    <h2 style="font-weight: 500; line-height: 50px;letter-spacing:.5px;">Elevating images with <br/> expert touch - Affordable<br/> photo editing</h2>
                    <p class="text-white" style="letter-spacing:.5px;">Save money on photo post-processing! <br/>Boost your profit margin with us.</p>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>
    @include('action-blog')
@endsection
