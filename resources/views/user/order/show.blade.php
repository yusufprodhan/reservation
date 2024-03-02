@extends('layouts.backend.app')
@section('page-css')
    <!-- Lightbox css -->
    <link href="/assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

    <!-- select 2 css -->
    <link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
@stop
@section('title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('View Order')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('View Order')}}</li>
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
                                        <img src="/assets/images/avter.png" style=" padding: 2rem;"/>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <h4>{{$order_details->order_id}}</h4>
                                    <p class="text-bold">{{$selected_services[0]->service_name}} {{__('Work')}}</p>
                                    <div class="flex flex-row">
                                        <div
                                            style="color: #22bcf4; display: inline-block; padding: 5px 11px; background: #eaf0f1; border-radius: 5px; font-weight: 600;border: 1px dashed; margin-right: 10px;">
                                            <i class="fas fa-shopping-cart"></i>
                                            {{$total_orders}}<br/>
                                            {{_('Total Orders')}}
                                        </div>
                                        <div
                                            style="color: #f1bc1d; display: inline-block; padding: 5px 11px; background: #f1ede1; border-radius: 5px;font-weight: 600;border: 1px dashed; margin-right: 10px;">
                                            <i class="fas fa-cart-plus"></i>
                                            {{$total_unpaid}}<br/>
                                            {{_('Unpaid Orders')}}
                                        </div>
                                        <div
                                            style="display: inline-block; padding: 5px 11px; border-radius: 5px;font-weight: 600;border: 1px dashed;">
                                            <i class="fas fa-credit-card" style="color:darkred"></i>
                                            ${{$order_details->price}}<br/>
                                            {{_('Total Due')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="d-flex flex-column justify-content-between">
                                <div class="d-flex flex-row justify-content-end">
                                    @php
                                        $status = '';
                                        if($order_details->status ==="In Review"){
                                            $status = '<span class="float-end" style="padding: 5px 30px; color: white; background-color: #079bc4; border-radius: 5px;">'.$order_details->status.'</span>';
                                        }
                                        elseif ($order_details->status === "Received"){
                                            $status = '<span class="float-end" style="padding: 5px 30px; color: white; background-color: #5fac05; border-radius: 5px;">'.$order_details->status.'</span>';
                                        }
                                        elseif ($order_details->status === "Pending"){
                                            $status = '<span class="float-end" style="padding: 5px 30px; color: white; background-color: #9c27b0; border-radius: 5px;">'.$order_details->status.'</span>';
                                        }
                                        elseif ($order_details->status === "Invoiced"){
                                            $status = '<span class="float-end" style="padding: 5px 30px; color: white; background-color: #00bcd4; border-radius: 5px;">'.$order_details->status.'</span>';
                                        }
                                        elseif ($order_details->status === "Delivered"){
                                            $status = '<span class="float-end" style="padding: 5px 30px; color: white; background-color: #0ab210; border-radius: 5px;">'.$order_details->status.'</span>';
                                        }
                                        echo $status
                                    @endphp
                                </div>
                                <!--  Modal content for the above example -->
                                <div class="modal fade payment" tabindex="-1" role="dialog"
                                     aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Payment</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="">
                                                            <div id="paypal-button-container"></div>
                                                            {{--                                                                    <button type="button" class="btn btn-primary paypal_btn" >Pay With PayPal ${{$order_details->price}}</button>--}}
                                                        </div>
{{--                                                        <form method="post">--}}
{{--                                                            <div class="mb-3">--}}
{{--                                                                <label for="credit-card-number" class="form-label">Card Number</label>--}}
{{--                                                                <input class="form-control " id="credit-card-number" type="text" maxlength=19 placeholder="0000 0000 0000 0000">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <div class="mb-3">--}}
{{--                                                                        <label for="expiration" class="form-label">Expiration</label>--}}
{{--                                                                        <input class="form-control form-control" type="month" name="expiration" placeholder="mm/yy">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <div class="mb-3">--}}
{{--                                                                        <label for="cvc" class="form-label">CVC</label>--}}
{{--                                                                        <input class="form-control form-control" type="text" name="cvc"  placeholder="256">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="mb-3">--}}
{{--                                                                <select class="form-control select2" name="country_id" style="width: 100% !important;"  required>--}}
{{--                                                                    <option>Select Country</option>--}}
{{--                                                                    @if(!empty($countries))--}}
{{--                                                                        @foreach($countries as $country)--}}
{{--                                                                            <option value="{{$country->id}}"> {{$country->name}}</option>--}}
{{--                                                                        @endforeach--}}
{{--                                                                    @endif--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-flex justify-content-center flex-column">--}}
{{--                                                                <div class="">--}}
{{--                                                                    <button type="submit" class="btn btn-dark">Pay now ${{$order_details->price}}</button>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="d-flex justify-content-center py-4">--}}
{{--                                                                    <span>Or</span>--}}
{{--                                                                </div>--}}
{{--                                                                --}}
{{--                                                            </div>--}}
{{--                                                        </form>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                        </div>
                        <hr/>
                        <div class="col-7">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified gap-3" role="tablist">
                                <li class="nav-item waves-effect waves-light border border-1 border-primary rounded">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#overview" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">OverView</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light border border-1 border-primary rounded">
                                    <a class="nav-link {{isset($invoice) ? '': 'disabled'}}" data-bs-toggle="tab" href="#invoice" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Invoice</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light border border-1 border-primary rounded">
                                    <a class="nav-link" data-bs-toggle="tab" href="#redo" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Redo</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light border border-1 border-primary rounded">
                                    <a class="nav-link" data-bs-toggle="tab" href="#chat" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Chat</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light border border-1 border-primary rounded">
                                    <a class="nav-link" data-bs-toggle="tab" href="#output" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Output</span>
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
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-image fa-2x text-primary mb-2"></i>
                                    <h4>{{$order_details->image_quantity}}</h4>
                                    <p class="text-gray-500">{{__('Image Quantity')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-image fa-2x text-primary mb-2"></i>
                                    <h4>{{ucfirst($order_details->image_complexity)}}</h4>
                                    <p class="text-gray-500">{{__('Image Complexity')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card" style="height: 148px !important;">
                                <div class="card-body text-center">
                                    @if($order_details->is_invoiced)
                                        <div id="day_wrap"
                                             style="color: #22bcf4; display: inline-block; padding: 20px 5px; background: #eaf0f1; border-radius: 5px; font-weight: 600; border: 1px dashed; margin-right: 10px;height: 105px;text-align: center;">
                                            <span class="my-3 font-size-18" id="days"></span>
                                            <h5>Days</h5>
                                        </div>
                                        <i class="fas fa-angle-left fa-2x" style="color:purple"></i>
                                        <i class="fas fa-angle-right fa-2x" style="color:purple"></i>
                                        <div id="day_wrap"
                                             style="color: #22bcf4; display: inline-block; padding: 20px 5px; background: #eaf0f1; border-radius: 5px; font-weight: 600; border: 1px dashed; margin-right: 10px;height: 105px;text-align: center;">
                                            <span class="my-3 font-size-18" id="hours"></span>
                                            <h5>Hours</h5>
                                        </div>
                                        <i class="fas fa-angle-left fa-2x" style="color:purple"></i>
                                        <i class="fas fa-angle-right fa-2x" style="color:purple"></i>
                                        <div id="day_wrap"
                                             style="color: #22bcf4; display: inline-block; padding: 20px 5px; background: #eaf0f1; border-radius: 5px; font-weight: 600; border: 1px dashed; margin-right: 10px;height: 105px;text-align: center;">
                                            <span class="my-3 font-size-18" id="minutes"></span>
                                            <h5>Minutes</h5>
                                        </div>
                                        <i class="fas fa-angle-left fa-2x" style="color:purple"></i>
                                        <i class="fas fa-angle-right fa-2x" style="color:purple"></i>
                                        <div id="day_wrap"
                                             style="color: #22bcf4; display: inline-block; padding: 20px 5px; background: #eaf0f1; border-radius: 5px; font-weight: 600; border: 1px dashed; margin-right: 10px;height: 105px;text-align: center;">
                                            <span class="my-3 font-size-18" id="seconds"></span>
                                            <h5>Seconds</h5>
                                        </div>
                                    @else
                                        <h4 style="color:#f3ad2e">{{__('Yet do not generate any invoice')}}</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-gray-500">{{__('Order Date & Time')}}</h5>
                                    <p class="text-blue-500">{{date('d M, Y, h:i A',strtotime($order_details->created_at))}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-gray-500">{{__('Turnaround Time')}}</h5>
                                    <p class="text-blue-500">{{$order_details->turnaround}} {{__('Hours')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-gray-500">{{__('Delivery Deadline')}}</h5>
                                    @if($order_details->turnaround !=="flexible")
                                        <p class="text-blue-500">{{date('d M, Y, h:i A', strtotime('+'.$order_details->turnaround.' hours',$order_details->submitted_at))}}</p>
                                    @else
                                        <p class="text-blue-500">{{__('Flexible')}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-gray-500">{{__('Selected Services')}}</h5>
                                    @if(isset($selected_services))
                                        @foreach($selected_services as $service)
                                            <button type="button"
                                                    class="btn btn-outline-pink my-1">{{$service->service_name}}</button>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-gray-500">{{__('Delivery Deadline')}}</h5>
                                    @if(isset($order_details->return_file_extension))
                                        @foreach(json_decode($order_details->return_file_extension) as $extension)
                                            <button type="button"
                                                    class="btn btn-outline-pink my-1">{{strtoupper($extension)}}</button>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-gray-500">{{__('Instruction')}}</h5>
                                    <p>{!! $order_details->instruction !!}</p>
                                </div>
                            </div>
                        </div>
                        @if(!empty($images))
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-gray-500">{{__('Upload Images')}}</h5>
                                        <div class="popup-gallery">
                                            @foreach($images as $key=>$image)
                                                <a class="float-start mx-1" href="{{$image->fileFullPath}}"
                                                   title="{{$image->file_original_name}}">
                                                    <div class="img-fluid">
                                                        <img src="{{'/'.$image->filePath}}"
                                                             alt="{{$image->file_original_name}}" width="120">
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-gray-500">{{__('Image Link')}}</h5>
                                        @if(isset($order_details->image_link))
                                            @foreach(json_decode($order_details->image_link) as $key=>$link)
                                                <a href="{{$link}}" target="_blank">{{$link}}</a> <br/>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="tab-pane" id="invoice" role="tabpanel">
                    <style>
                        .watermark-wrap{
                            position: absolute;
                            z-index: 1;
                            background: white;
                            display: block;
                            min-height: auto;
                            min-width: 9%;
                            bottom: 10%;
                            left: 17%;
                        }
                        .watermark-inner-text
                        {
                            color: red;
                            font-size: 30px;
                            opacity: .2;
                            font-weight: bold;
                            border: 3px solid red;
                            padding: 10px;
                            border-radius: 10px;
                            transform:rotate(330deg);
                            -webkit-transform:rotate(330deg);
                        }
                    </style>
                    <div class="watermark-wrap absolute">
                        <div class="watermark-wrap absolute">
                            @if($order_details->is_paid)
                                <p class="watermark-inner-text m-0 text-center">PAID</p>
                            @else
                                <p class="watermark-inner-text m-0 text-center">UNPAID</p>
                            @endif
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            @if(isset($invoice))
                                <div class="invoice-title">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mb-4">
                                                <img src="/assets/images/logo-light.png" alt="logo" height="20"/>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-row">
                                                <button type="button" class="btn "><i class="fas fa-download fa-1x"></i> {{_('Invoice Download')}}</button>
                                                @if($order_details->is_invoiced)
                                                    <button type="button" class="btn btn-sm ms-3 border bg-primary text-white" data-bs-toggle="modal" data-bs-target=".payment" onclick="renderPayPalButton('{{$order_details->price}}','{{ $order_details->id }}','Clipping')">
                                                        <i class="fas fa-wallet"></i> {{_('Make Payment')}}
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="float-end font-size-16">INVOICE# {{isset($invoice->invoice_id) ? $invoice->invoice_id : ''}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <address>
                                            <strong>Billed From:</strong><br>
                                            {{$bill_from->name}}<br>
                                            {{$bill_from->address}}<br>
                                            {{$bill_from->city}}, {{$bill_from->post_code}}
                                            , {{$bill_from->country->name}}
                                        </address>
                                    </div>
                                    <div class="col-6 text-end">
                                        <address>
                                            <strong>Billed To:</strong><br>
                                            {{$billing_address->bill_to}}<br>
                                            {{$billing_address->billing_address}}<br>
                                            {{$billing_address->billing_city}}, {{$billing_address->billing_post_code}}
                                            ,{{$billing_address->country->name}}
                                        </address>
                                        <address>
                                            <strong>Billing Date:</strong><br>
                                            {{isset($invoice->created_at) ?? date('M d, Y',strtotime($invoice->created_at))}}<br>
                                        </address>
                                        <address>
                                            <strong>Due Date:</strong><br>
                                            {{isset($invoice->created_at) ?? date('M d, Y',strtotime(date_add($invoice->created_at,date_interval_create_from_date_string("3 days"))))}}<br><br>
                                        </address>
                                    </div>
                                </div>
                                <div class="py-2 mt-3">
                                    <h3 class="font-size-15 fw-bold">Order summary</h3>
                                </div>
                                <div class="table-responsive overflow-x-scroll">
                                    <table class="table table-nowrap invoice_tbl">
                                        <thead>
                                        <tr>
                                            <th style="width: 70px;">{{_('SL')}}</th>
                                            <th>{{_('Service Name')}}</th>
                                            <th class="text-end">{{_('Qty')}}</th>
                                            <th class="text-end">{{_('Price')}}</th>
                                            <th class="text-end">{{_('Discount')}}</th>
                                            <th class="text-end">{{_('Sub Total')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(json_decode($invoice->service_name) as $key=>$service)
                                            @php
                                                $comments = json_decode($invoice->comments)[$key];
                                                $qty = json_decode($invoice->qty)[$key];
                                                $price = json_decode($invoice->price)[$key];
                                                $single_discount = json_decode($invoice->single_discount)[$key];
                                                $row_sub_total = json_decode($invoice->row_sub_total)[$key];
                                            @endphp
                                            <tr>
                                                <td width="4%">{{$key+1}}</td>
                                                <td width="40%">{{$service}} ({{$comments}})</td>
                                                <td width="10%" class="text-end">{{$qty}}</td>
                                                <td width="10%" class="text-end">${{$price}}</td>
                                                <td width="10%" class="text-end">${{$single_discount}}%</td>
                                                <td width="10%" class="text-end">${{$row_sub_total}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="5" class="text-end ">{{__('Sub Total')}}</td>
                                            <td class="text-end">$ {{$invoice->sub_total}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="border-0 text-end">
                                                <strong>{{__('Discount')}} $</strong>
                                            </td>
                                            <td class="border-0 text-end">$ {{$invoice->discount}} ({{$invoice->discount_type}})</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="border-0 text-end">
                                                <strong>{{__('Total')}}</strong>
                                            </td>
                                            <td class="border-0 text-end"><strong>${{$invoice->grand_total}}</strong></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="redo" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{route('home.order.redo')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="invoice_id" value="{{isset($invoice->id) ?? $invoice->id}}">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <label for="redo_instruction" class="form-label">Instruction<span
                                                class="text-danger">*</span></label>
                                        <textarea class="mb-3" id="elm1" name="redo_instruction">{!! isset($order_details->redo_instruction) ?? $order_details->redo_instruction !!}</textarea>
                                        <div class="mt-2"><small>{{__('Please write instruction properly. Instruction will help designer to edit and retouch your image as per instuction')}}</small></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h2 class="card-title">Upload Type</h2>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="w-full btn border bg-transparent p-5 image-link-btn">
                                                            {{__('Image Link')}}<br/>
                                                            <small>{{__('Links Like: Dropbox, Google Drive, One Drive etc.')}}</small>
                                                        </button>
                                                        <div class="image_link_wrap my-3 d-none">
                                                            <div class="image_link_inner">
                                                                <label for="job_title" class="form-label">{{__('Images Link')}}</label>
                                                                @if(isset($order_details->image_link))
                                                                    @foreach(json_decode($order_details->image_link) as $key=>$link)
                                                                        <div class="row link_wrap my-2">
                                                                            <div class="col-10">
                                                                                <input
                                                                                    class="form-control"
                                                                                    name="image_link[]"
                                                                                    type="url"
                                                                                    placeholder="Images Link"
                                                                                    value="{{$link}}"
                                                                                />
                                                                            </div>
                                                                            <div class="col-2">
                                                                                <button type="button" class="btn btn-outline-danger image-link-delete-btn"><i class="fa fa-trash"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <div class="row link_wrap my-2">
                                                                        <div class="col-10">
                                                                            <input
                                                                                class="form-control"
                                                                                name="image_link[]"
                                                                                type="url"
                                                                                placeholder="Images Link"
                                                                                value="{{isset($order_details->redo_instruction) ? $order_details->redo_instruction :''}}"
                                                                            />
                                                                        </div>
                                                                        <div class="col-2">
                                                                            <button type="button" class="btn btn-outline-danger image-link-delete-btn"><i class="fa fa-trash"></i></button>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <button type="button" class="btn btn-outline-info mt-3 add-more-btn"><i class="fa fa-plus"> {{__('Add Another Link')}}</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="input-group">
                                                            <input type="file" class="form-control" id="upload_file" name="upload_files[]" multiple>
                                                            <label class="input-group-text" for="upload_file">Upload</label>
                                                        </div>
                                                        <small>{{_('It will allow just for few small size sample images. If you have more images please provide image down link')}}</small>
                                                    </div>
                                                    @if(!empty($redo_images))
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="text-gray-500">{{__('Upload Images')}}</h5>
                                                                    <div class="popup-gallery">
                                                                        @foreach($redo_images as $key=>$image)
                                                                            <a class="float-start mx-1" href="{{$image->fileFullPath}}" title="{{$image->file_original_name}}">
                                                                                <div class="img-fluid">
                                                                                    <img src="{{'/'.$image->filePath}}" alt="{{$image->file_original_name}}" width="120">
                                                                                </div>
                                                                            </a>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light float-end mb-2">Redo</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="chat" role="tabpanel">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
{{--                                <h2 class="card-title"></h2>--}}
                                <p>Coming soon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="output" role="tabpanel">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
{{--                                <h2 class="card-title"></h2>--}}
                                @if($order_details->is_paid)
                                    <a href="{{$order_details->output_link}}">Download Link</a>
                                @else
                                    <p>{{_('Please pay first for download images')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@stop

@section('page-script')
    <!-- Magnific Popup-->
    <script src="/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- select 2 js -->
    <script src="/assets/libs/select2/js/select2.min.js"></script>

    <!-- Tour init js-->
    <script src="/assets/js/pages/lightbox.init.js"></script>

    <!-- form advanced init -->
    <script src="/assets/js/pages/form-advanced.init.js"></script>

    <!--tinymce js-->
    <script src="/assets/libs/tinymce/tinymce.min.js"></script>

    <!-- init js -->
    <script src="/assets/js/pages/form-editor.init.js"></script>

    <script src="https://www.paypal.com/sdk/js?client-id=AdrblDc13uITTkwdArkM-89Bb85cEZ8-eh0DyRh3TjtUfYEijRQX4koMvimLO5WQ652_iqE1fKxP-5ZF&disable-funding=credit,card"></script>

    @if($order_details->is_invoiced)
        @php
            $countDownDate = date('d M, Y, h:i A', strtotime('+'.$order_details->turnaround.' hours',$order_details->submitted_at));
        @endphp
        <script>
            // Set the date we're counting down to
            var countDownDate = new Date('{{$countDownDate}}').getTime();

            // Update the count down every 1 second
            var x = setInterval(function () {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>
    @endif
    <script>
        // const input = document.getElementById("credit-card-number");
        // input.addEventListener("input", () => input.value = formatNumber(input.value.replaceAll(" ", "")));
        //
        // const formatNumber = (number) => number.split("").reduce((seed, next, index) => {
        //     if (index !== 0 && !(index % 4)) seed += " ";
        //     return seed + next;
        // }, "");
        //
        //
        // function renderPayPalButton(total_amount, order_id,name) {
        //     var _token = $('meta[name=csrf-token]').attr('content');
        //     var base_url = $('meta[name=base-url]').attr('content');
        //     var _this = $(this);
        //     $("#paypal-button-container").empty();
        //     $("#escrow_price").val(total_amount);
        //     $("#product_title").val(name);
        //     $("#buyer_order_id").val(order_id);
        //     paypal.Buttons({
        //         createOrder: function (data, actions) {
        //             return actions.order.create({
        //                 purchase_units: [{
        //                     amount: {
        //                         value: total_amount
        //                     }
        //                 }]
        //             });
        //         },
        //         onApprove: function (data, actions) {
        //             // Capture the funds from the transaction
        //             return actions.order.capture().then(function (details) {
        //                 if (details.id) {
        //                     $("#payPalModal").modal('hide');
        //                     // $.ajax({
        //                     //     url: base_url + '/update-status/' + order_id,
        //                     //     method: 'POST',
        //                     //     dataType: 'json',
        //                     //     data: {
        //                     //         _token: _token,
        //                     //         status_id: 14,
        //                     //     },
        //                     //     success: function (response) {
        //                     //         if (response.success === true) {
        //                     //             swal({
        //                     //                 title: "Success!",
        //                     //                 text: 'Payment Executed!',
        //                     //                 icon: "success"
        //                     //             }).then((value) => {
        //                     //                 window.location.reload();
        //                     //             });
        //                     //         } else {
        //                     //             swal("Error!", response.message, "error");
        //                     //         }
        //                     //     },
        //                     //     error: function (err) {
        //                     //         console.log(err);
        //                     //     }
        //                     // });
        //                 } else {
        //                     swal("Payment Error!", 'Something went wrong!', "error");
        //                 }
        //             });
        //         }
        //     }).render('#paypal-button-container');
        //     $("#payPalModal").modal('show');
        // }

        //on click image link button
        $(document).on('click','.image-link-btn',function (){
            // $('.image_link_inner').copy().append()
            $('.image_link_wrap').removeClass('d-none').addClass('d-block')
        })

        //on click add another link input field
        $(document).on('click','.add-more-btn',function (){
            let inner = $('.link_wrap:last-child').clone();
            $('.image_link_inner').append(inner)
        })

        //on click add another link input field
        $(document).on('click','.image-link-delete-btn',function (){
            $(this).closest('.row').remove()
        })
    </script>
@stop
