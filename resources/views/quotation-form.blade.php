@extends('layouts.frontend.app')

@section('content')
    @include('layouts.frontend.hero_section')
    <!-- quotation-->
    <section id="quotation" class="image-right">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="#" id="quotation-form" class="quotation-form">
                        @csrf
                        <div class="row form-group-margin">
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="date" name="date" class="form-control date" id="date" placeholder="Move Date">
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="text" name="name" class="form-control name" placeholder="Name">
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="text" name="phone" class="form-control phone" placeholder="Phone">
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="email" name="email" class="form-control email" placeholder="Email">
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="text" name="moving-from" class="form-control moving-from" placeholder="Moving from">
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="text" name="moving-to" class="form-control moving-to" placeholder="Moving to">
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <i class="icon-arrow-down mr-3"></i>
                                <select name="budget" class="form-control field-budget">
                                    <option value="">Please Select</option>
                                    <option value="One Bedroom Apartment">One Bedroom Apartment</option>
                                    <option value="Two Bedroom Apartment">Two Bedroom Apartment</option>
                                    <option value="Three Bedroom Apartment">Three Bedroom Apartment</option>
                                    <option value="Two Bedroom House">Two Bedroom House</option>
                                    <option value="Three Bedroom House">Three Bedroom House</option>
                                    <option value="Four Bedroom House">Four Bedroom House</option>
                                    <option value="Five Bedroom House">Five Bedroom House</option>
                                    <option value="Six Bedroom House">Six Bedroom House</option>
                                    <option value="Two Bedroom Townhouse">Two Bedroom Townhouse</option>
                                    <option value="Three Bedroom Townhouse">Three Bedroom Townhouse</option>
                                    <option value="Studio Apartment">Studio Apartment</option>
                                    <option value="Small Shipment (few pieces)">Small Shipment (few pieces)</option>
                                    <option value="Storage">Storage</option>
                                    <option value="Office">Office</option>
                                    <option value="Basement">Basement</option>
                                </select>
                            </div>
                            <div class="col-12 m-0 p-2 input-group">
                                <textarea name="instruction" class="form-control instruction" placeholder="Instruction"></textarea>
                            </div>
                            <div class="col-12 col-12 m-0 pl-md-2">
                                <span class="form-alert"></span>
                            </div>
                            <div class="col-12 input-group m-0 p-2">
                                <a class="btn primary-button">SEND</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <img src="/front-assets/images/home/Homepage1.png" class="fit-image rounded" alt="Dedicated to Exceeding Expectation">
                </div>
            </div>
        </div>
    </section>
@endsection