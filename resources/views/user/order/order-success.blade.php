@extends('layouts.backend.app')

@section('title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('Order Success')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('Order Success')}}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
@stop
@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                @if(isset($create->id))
                    <div class="card-body text-center">
                        <span style="font-size: 70px; color: white; background: green; border-radius: 50%; padding: 10px 16px;"><i class="mdi mdi-check-bold"></i></span>
                        <h1>Thank You!</h1>
                        <p class="font-size-18">Your order <b style="color:purple">#{{$create->order_id}}</b> submitted successfully. Please wait, Our support team will review your order shortly. Thank you for being with PIX Clipping Ltd.</p>
                        <a class="btn btn-success" href="{{route('home.order.show',$create->id)}}"> <i class="mdi mdi-eye text-white font-size-22" style="position: relative; top: 1px;"></i> {{__('View Order')}}</a>
                    </div>
                @else
                    <div class="card-body text-center">
                        <span style="font-size: 70px; color: white; background: red; border-radius: 50%; padding: 10px 16px;"><i class="mdi mdi-message-alert"></i></span>
                        <h1>Fail!</h1>
                        <p class="font-size-18">Your order Fail. Please fill the order form proper or contact or support team.</p>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <!-- end row -->

@stop

