@extends('layouts.backend.app')
@section('page-css')
    <!-- select 2 css -->
    <link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
@stop
@section('title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('User Details')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('User Details')}}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
@stop
@section('content')
    <!-- start row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-3">
                                    <div class="align-center" style="background:#eaeaea;">
                                        <img src="/assets/images/avter.png" style="padding: 2rem;"/>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <h4>{{$user_details->name}}</h4>
                                    <div class="flex flex-row">
                                        <div style="color: #22bcf4; display: inline-block; padding: 5px 11px; background: #eaf0f1; border-radius: 5px; font-weight: 600;border: 1px dashed; margin-right: 10px;">
                                            <i class="fas fa-shopping-cart"></i>
                                            {{$total_orders}}<br/>
                                            {{_('Total Orders')}}
                                        </div>
                                        <div style="color: #f1bc1d; display: inline-block; padding: 5px 11px; background: #f1ede1; border-radius: 5px;font-weight: 600;border: 1px dashed; margin-right: 10px;">
                                            <i class="fas fa-cart-plus"></i>
                                            {{$total_unpaid}}<br/>
                                            {{_('Unpaid Orders')}}
                                        </div>
                                        <div style="display: inline-block; padding: 5px 11px; border-radius: 5px;font-weight: 600;border: 1px dashed;">
                                            <i class="fas fa-credit-card" style="color:darkred"></i>
                                            $0.00<br/>
                                            {{_('Total Due')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn float-end {{$user_details->status ==='Active' ?'btn-outline-success':'btn-outline-danger'}}">{{$user_details->status}}</button>
                        </div>
                        <hr/>
                        <div class="col-5">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified gap-3" role="tablist">
                                <li class="nav-item waves-effect waves-light border border-1 border-primary rounded">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#overview" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">OverView</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light border border-1 border-primary rounded">
                                    <a class="nav-link" data-bs-toggle="tab" href="#edit" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Edit</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="overview" role="tabpanel">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <h4 class="card-header mt-0">Profile Info</h4>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Name')}} :</span>
                                        <strong>{{$user_details->name}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Email')}} :</span>
                                        <strong>{{$user_details->email}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Phone')}} :</span>
                                        <strong>{{$user_details->phone}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('User Address')}} :</span>
                                        <strong>{{$user_details->address}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('City')}} :</span>
                                        <strong>{{$user_details->city}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('State')}} :</span>
                                        <strong>{{$user_details->state}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Country')}} :</span>
                                        <strong>{{isset($user_details->country->name) ? $user_details->country->name :""}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Post code')}} :</span>
                                        <strong>{{$user_details->post_code}}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header mt-0">
                                    <h4 class="m-0">{{__('Billing Info')}}</h4>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Bill to (Company/Person')}} :</span>
                                        <strong>{{isset($user_details->billingAddress->bill_to) ? $user_details->billingAddress->bill_to:''}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Email')}} :</span>
                                        <strong>{{isset($user_details->billingAddress->billing_email) ? $user_details->billingAddress->billing_email:''}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Phone')}} :</span>
                                        <strong>{{isset($user_details->billingAddress->billing_phone) ? $user_details->billingAddress->billing_phone:''}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Vat ID')}} :</span>
                                        <strong>{{isset($user_details->billingAddress->vat_id) ? $user_details->billingAddress->vat_id:''}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Website Url')}} :</span>
                                        <strong>{{isset($user_details->billingAddress->website_url) ? $user_details->billingAddress->website_url:''}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Billing Address')}} :</span>
                                        <strong>{{isset($user_details->billingAddress->billing_address) ? $user_details->billingAddress->billing_address:''}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('City')}} :</span>
                                        <strong>{{isset($user_details->billingAddress->billing_city) ? $user_details->billingAddress->billing_city:''}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('State')}} :</span>
                                        <strong>{{isset($user_details->billingAddress->billing_state) ? $user_details->billingAddress->billing_state :''}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Country')}} :</span>
                                        <strong>{{isset($user_details->billingAddress->country->name) ? $user_details->billingAddress->country->name :''}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Post Code')}} :</span>
                                        <strong>{{isset($user_details->billingAddress->billing_post_code) ? $user_details->billingAddress->billing_post_code :''}}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="edit" role="tabpanel">
                    <form method="post" action="{{route('admin.user.update')}}">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <h4 class="card-header mt-0">{{__('Profile Info')}}</h4>
                                    <div class="card-body">
                                        <input type="hidden" name="id" value="{{$user_details->id}}"/>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">{{__('Name')}}<span class="text-danger">*</span></label>
                                            <select name="status" class="form-control">
                                                <option value="Active">{{__('Active')}}</option>
                                                <option value="Inactive">{{__('Inactive')}}</option>
                                            </select>
                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="float-end">
                                            <button class="btn btn-success ">{{__('Update')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@stop
@section('page-script')

    <!-- select 2 js -->
    <script src="/assets/libs/select2/js/select2.min.js"></script>
    <!-- form advanced init -->
    <script src="/assets/js/pages/form-advanced.init.js"></script>

    <script>
        //copy name
        $(document).on('click','.bill_to',function (){
            let bill_to = $(document).find('#name').val()
            $(this).parent().parent().find('input').val(bill_to)
        })

        //copy email
        $(document).on('click','.billing_email',function (){
            let billing_email = $(document).find('#email').val()
            $(this).parent().parent().find('input').val(billing_email)
        })

        //copy phone
        $(document).on('click','.billing_phone',function (){
            let billing_phone = $(document).find('#phone').val()
            $(this).parent().parent().find('input').val(billing_phone)
        })

        //copy address
        $(document).on('click','.billing_address',function (){
            let billing_address = $(document).find('#address').val()
            $(this).parent().parent().find('textarea').val(billing_address)
        })

        //copy city
        $(document).on('click','.billing_city',function (){
            let billing_city = $(document).find('#city').val()
            $(this).parent().parent().find('input').val(billing_city)
        })

        //copy state
        $(document).on('click','.billing_state',function (){
            let billing_state = $(document).find('#state').val()
            $(this).parent().parent().find('input').val(billing_state)
        })

        //copy post code
        $(document).on('click','.billing_post_code',function (){
            let billing_post_code = $(document).find('#post_code').val()
            $(this).parent().parent().find('input').val(billing_post_code)
        })

    </script>
@stop
