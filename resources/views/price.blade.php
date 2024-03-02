@extends('layouts.frontend.app')

@section('content')
    <!-- Hero part-->
    <section class="bg-white highlights image-right" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(4,96,198,1) 0%, rgba(9,54,131,1) 100%);position: relative;top: 86px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="text-white" style="font-weight: 500; line-height: 50px;letter-spacing:.5px;">Elevating images with <br/> expert touch - Affordable<br/> photo editing</h3>
                            <p class="text-white" style="letter-spacing:.5px;">Save money on photo post-processing! <br/>Boost your profit margin with us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="/front-assets/images/home/Pricepage1.png" class="fit-image" alt="Price clipping path">
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="section-1 plans">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h3>Approximate Pricing Calculator</h3>
                    <p>Estimate the cost based on the quantity, delivery, and services.<br/>
                        The cost listed below serves as an example of our pricing.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="input-group">
                        <span class="input-group-text">Services</span>
                        <select class="form-select services">
                            <option>Select Service</option>
                            @isset($pathServices)
                                @foreach($pathServices as $pathService)
                                    <option value="{{$pathService->id}}">{{$pathService->service_name}}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group">
                        <span class="input-group-text">Delivery</span>
                        <select class="form-select delivery">
                            <option>Normal Delivery: 24 Hours</option>
                            <option>Rush Delivery: 12 Hours</option>
                            <option>Express Delivery: 6 Hours</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group">
                        <span class="input-group-text">Quantity</span>
                        <input type="number" class="form-control quantity bg-white" value="1"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table table-bordered text-center h4 text-capitalize">
                    <tbody>
                    <tr>
                        <td class="s-service"><span id="serviceTxt" style="font-size: 18px;">Photo Retouching</span> </td>
                        <td class="s-turnaround" style="font-size: 18px;"><span id="deliveryTxt">6</span> Hours Turnaround Time </td>
                        <td class="s-images" style="font-size: 18px;"><span id="qtyTxt">1</span> Images</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card">
                        <i class="icon icon-handbag"></i>
                        <h4>Basic</h4>
                        <span class="price"><i>$</i>00</span>
                        <hr/>
                        <p class="m-0"> Images containing the following information and a simple touch-up request will come under the basic category.</p>
                        <hr/>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Less curve & details</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Simple form & shape</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Basic editing</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Simple instruction</span>
                                <i class="icon-min m-0 icon-close text-right"></i>
                            </li>
                        </ul>
                        <a href="#" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>Basic Example</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card">
                        <i class="icon icon-fire"></i>
                        <h4>Moderate</h4>
                        <span class="price"><i>$</i>0.29</span>
                        <hr/>
                        <p class="m-0">Images with the features listed below and a modest demand for touch-ups fall into the medium category.</p>
                        <hr/>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Average form & shape</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>2-3 subjects</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Medium details</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Moderate instructions</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>

                        </ul>
                        <a href="{{route('login')}}" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>Moderate Examples</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card">
                        <i class="icon icon-diamond"></i>
                        <h4>High end</h4>
                        <span class="price"><i>$</i>00</span>
                        <hr/>
                        <p class="m-0">Demand for advanced touch-ups will be classified as high-end.</p>
                        <hr/>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Complex shape % form</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Most subjects & details</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Advance retouching</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Most instructions</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                        </ul>
                        <a href="{{route('contact')}}" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>High-end Examples</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interest to online -->
    <section class="text-white" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(12,61,115,1) 0%, rgba(70,135,246,1) 100%);">
        <div class="container">
            <div class="row  align-items-center text-center">
                <div class="col-2"></div>
                <div class="col-8">
                    <h3 class="mb-1 text-white" style="letter-spacing: .5px">Affordable editing services that deliver excellence</h3>
                    <p class="mt-1" style="letter-spacing: 1px">Introducing PixClipping: Unbeatable services & benefits, unmatched price. Client-centric approach: Quality, delivery, support - all optimised for your benefit. One-stop solution: From order to image delivery, at an affordable cost.</p>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section>
        <div class="container">
            <div class="row justify-content-center text-center items">
                <div class="col-12 p-0">
                    <h3 class="featured alt">PixClipping - Where Affordability <br/>Meets Performance in Post-Processing</h3>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-pencil"></i>
                        <h5>Flexible Pay Period</h5>
                        <p>Flexible payment options: Weekly, Monthly, and Tailored Plans for our valued regular and project clients.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-menu"></i>
                        <h5>Accurate Estimations</h5>
                        <p>We determine fixed pricing based on manual complexity assessment and your retouching requirements.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-rocket"></i>
                        <h5>Transparent Pricing</h5>
                        <p>Price is fixed upon discussion - No hidden surprises.""We'll send an invoice before processing your images - Smooth, transparent transactions.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-rocket"></i>
                        <h5>Price Negotiation</h5>
                        <p>Maximising negotiation for the best price if it seems high to you.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-rocket"></i>
                        <h5>Discount & Offers</h5>
                        <p>Enhance your photos affordably and seize the best deals with our unbeatable occasion offers.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon icon-rocket"></i>
                        <h5>Bulk Editing Discount</h5>
                        <p>All prices mentioned above are negotiable for bulk editing and projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interest to online -->
    <section class="text-white" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(12,61,115,1) 0%, rgba(70,135,246,1) 100%);">
        <div class="container">
            <div class="row  align-items-center text-center">
                <div class="col-2"></div>
                <div class="col-8">
                    <h3 class="mb-1 text-white" style="letter-spacing: .5px">Ensuring Safe and <br/>Secure Payment Transactions</h3>
                    <p class="mt-1" style="letter-spacing: 1px">PixClipping accepts payments through globally trusted and secure credit/debit cards</p>
                </div>
                <div class="col-2"></div>
                <div class="col-12 mt-5">
                    <img src="/front-assets/images/logo-1.png"/>
                    <img src="/front-assets/images/logo-1.png"/>
                    <img src="/front-assets/images/logo-1.png"/>
                    <img src="/front-assets/images/logo-1.png"/>
                </div>
            </div>
        </div>
    </section>

    @include('action-blog')
@endsection
@section('page-script')

@endsection
