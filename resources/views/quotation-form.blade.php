@extends('layouts.frontend.app')

@section('content')
    @include('layouts.frontend.hero_section')
    <!-- quotation-->
    <section id="quotation" class="image-right">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
                <div class="col-12 col-md-6">
                    <form action="{{route('quotationFormSubmit')}}" id="quotation-form" method="post" class="quotation-form">
                        @csrf
                        <div class="row form-group-margin">
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="text" name="date" class="form-control date" id="date" placeholder="Move Date" required>
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="text" name="name" class="form-control name" placeholder="Name" required>
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="text" name="phone" class="form-control phone" placeholder="Phone" required>
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="email" name="email" class="form-control email" placeholder="Email" required>
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="text" name="movingFrom" class="form-control movingFrom" placeholder="Moving from" required>
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <input type="text" name="movingTo" class="form-control movingTo" placeholder="Moving to" required>
                            </div>
                            <div class="col-12 col-md-6 m-0 p-2 input-group">
                                <i class="icon-arrow-down mr-3"></i>
                                <select name="moveSize" class="form-control field-budget" required>
                                    <option value="">Please Select Move Size</option>
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
                                <textarea name="instruction" class="form-control instruction" placeholder="Instruction" required></textarea>
                            </div>
                            <div class="col-12 col-12 m-0 pl-md-2">
                                <span class="form-alert"></span>
                            </div>
                            <div class="col-12 input-group m-0 p-2">
                                <button class="btn primary-button" type="submit">SEND</button>
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

@section('page-script')
    <script>
        $(function(){
            $('.date').attr("placeholder","Move Date");
            $('#date').datepicker({
                format: 'yyyy/mm/dd',
                "autoclose": true
            }).datepicker("setDate",'now');
        });

    </script>
@endsection