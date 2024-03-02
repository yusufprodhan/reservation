@extends('layouts.backend.app')
@section('page-css')
    <!-- Lightbox css -->
    <link href="/assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

    <!-- select 2 css -->
    <link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
@stop
@section('title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('View Order')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">{{__('Home')}}</a></li>
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
                                        <img src="/assets/images/avter.png" style="padding: 2rem;"/>
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
                                    <a class="nav-link" data-bs-toggle="tab" href="#invoice" role="tab">
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
                            <div class="card " style="height: 148px !important;">
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
                <div class="tab-pane relative" id="invoice" role="tabpanel" >
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
                        @if($order_details->is_paid)
                            <p class="watermark-inner-text m-0 text-center">PAID</p>
                        @else
                            <p class="watermark-inner-text m-0 text-center">UNPAID</p>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post" action="{{route('admin.invoice.store')}}">
                                        @csrf
                                        <input type="hidden" name="order_id" value="{{$order_details->id}}" />
                                        <input type="hidden" name="user_id" value="{{$order_details->user_id}}" />
                                        <div class="invoice-title">
                                            <h4 class="float-end font-size-16">INVOICE# {{isset($invoice->invoice_id) ? $invoice->invoice_id : ''}}</h4>
                                            <div class="mb-4">
                                                <img src="/assets/images/logo-light.png" alt="logo" height="20"/>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <address>
                                                    <strong>Billed From:</strong><br>
                                                    {{auth()->user()->name}}<br>
                                                    {{auth()->user()->address}}<br>
                                                    {{auth()->user()->city}}, {{auth()->user()->post_code}}, {{auth()->user()->country->name}}
                                                </address>
                                            </div>
                                            <div class="col-6 text-end">
                                                <address>
                                                    <strong>Billed To:</strong><br>
                                                    {{$billing_address->bill_to}}<br>
                                                    {{$billing_address->billing_address}}<br>
                                                    {{$billing_address->billing_city}}, {{$billing_address->billing_post_code}},{{$billing_address->country->name}}
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
                                                    <th>{{_('Qty')}}</th>
                                                    <th class="text-end">{{_('Price')}}</th>
                                                    <th class="text-end">{{_('Discount')}}</th>
                                                    <th class="text-end">{{_('Sub Total')}}</th>
                                                    <th class="text-end"><button type="button" class="btn btn-primary invoice_row_plus_btn mb-2"><i class="fa fa-plus"></i></button></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(!empty($invoice))
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
                                                            <td width="40%">
                                                                <select name="service_name[]" class="form-control" style="width: 100% !important;">
                                                                    @if($all_services)
                                                                        @foreach($all_services as $key=>$serv)
                                                                            <option value="{{$serv->service_name}}" {{$serv->service_name ===$service ?'selected' : ''}}>{{$serv->service_name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                                <input class="form-control mt-2" type="text" name="comments[]" placeholder="comments" value="{{$comments}}">
                                                            </td>
                                                            <td width="10%">$ <input type="number" class="form-control text-end service_qty d-inline-block"
                                                                                     name="qty[]" required value="{{$qty}}" />
                                                            </td>
                                                            <td width="10%">$ <input type="number"  step="any" min="0" max="100000" class="form-control text-end service_price d-inline-block"
                                                                                     name="price[]" required value="{{$price}}"/>
                                                            </td>
                                                            <td width="10%">$
                                                                <input type="number"  step="any" min="0" max="100000" class="form-control text-end service_discount d-inline-block"
                                                                       name="single_discount[]" value="0" value="{{$single_discount}}" />%
                                                            </td>
                                                            <td width="10%"><span class="float-end">$ <span class="row_sub_total">{{$row_sub_total}}</span></span>
                                                                <input type="hidden" class="row_sub_total_input" name="row_sub_total[]" value="{{$row_sub_total}}" />
                                                            </td>
                                                            <td width="5%" class="text-center delete_btn_td"></td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    @if(isset($selected_services))
                                                        @foreach($selected_services as $key=>$service)
                                                            <tr>
                                                                <td width="4%">{{$key+1}}</td>
                                                                <td width="40%">
                                                                    <select name="service_name[]" class="form-select" style="width: 100% !important;">
                                                                        @if($all_services)
                                                                            @foreach($all_services as $key=>$serv)
                                                                                <option value="{{$serv->service_name}}" {{$serv->service_name ===$service->service_name ?'selected' : ''}}>{{$serv->service_name}}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                    <input class="form-control mt-2" type="text" name="comments[]" placeholder="comments">
                                                                </td>
                                                                <td width="10%">$ <input type="number" class="form-control text-end service_qty d-inline-block"
                                                                                         name="qty[]" required></td>
                                                                <td width="10%">$ <input type="number"  step="any" min="0" max="100000" class="form-control text-end service_price d-inline-block"
                                                                                         name="price[]" required></td>
                                                                <td width="10%">$
                                                                    <input type="number"  step="any" min="0" max="100000" class="form-control text-end service_discount d-inline-block"
                                                                           name="single_discount[]" value="0">%
                                                                </td>
                                                                <td width="10%">
                                                                    <span class="float-end">$ <span class="row_sub_total">0.00</span></span>
                                                                    <input type="hidden" class="row_sub_total_input" name="row_sub_total[]"/>
                                                                </td>
                                                                <td width="5%" class="text-center delete_btn_td"></td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                @endif
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="5" class="text-end ">{{__('Sub Total')}}</td>
                                                    <td class="text-end">$<span class="sub_total_price">{{ isset($invoice->sub_total) ? $invoice->sub_total:0.00 }}</span>
                                                        <input type="hidden" name="sub_total" class="sub_total_price_input" value="{{isset($invoice->sub_total) ? $invoice->sub_total:0 }}"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="border-0 text-end">
                                                        <strong>{{__('Discount')}} $</strong>
                                                    </td>
                                                    <td class="border-0 text-end">
                                                        <input type="number" name="discount" class="form-control discount text-end" value="{{isset($invoice->discount) ? $invoice->discount:0 }}"/>
                                                    </td>
                                                    <td width="10%"  class="border-0 text-end">
                                                        <select name="discount_type" class="form-select discount_type select">
                                                            <option value="Flat" {{isset($invoice->discount_type) === 'Flat' ? 'selected':''}}>{{_('Flat')}}</option>
                                                            <option value="Percent" {{isset($invoice->discount_type) === 'PercentPercent' ? 'selected':''}}>{{_('Percent')}}</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="border-0 text-end">
                                                        <strong>{{__('Total')}}</strong>
                                                    </td>
                                                    <td class="border-0 text-end">
                                                        <h4 class="m-0">$<span class="total_price">{{ isset($invoice->grand_total) ? $invoice->grand_total:0.00 }}</span></h4>
                                                        <input type="hidden" name="total_price" class="total_price_input" value="{{isset($invoice->grand_total) ? $invoice->grand_total:0 }}"/>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="d-print-none">
                                            <div class="float-end">
                                                <button type="submit" class="btn btn-primary w-md waves-effect waves-light">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="redo" role="tabpanel">
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
                <div class="tab-pane" id="chat" role="tabpanel">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title"></h2>
                                <p>Coming soon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="output" role="tabpanel">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @if($order_details->output_link)
                                    <a href="{{$order_details->output_link}}">Download Link</a>
                                @else
                                    <p>{{_('Payment pending')}}</p>
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
    <!-- select 2 js -->
    <script src="/assets/libs/select2/js/select2.min.js"></script>
    <!-- form advanced init -->
    <script src="/assets/js/pages/form-advanced.init.js"></script>

    <!-- Magnific Popup-->
    <script src="/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Tour init js-->
    <script src="/assets/js/pages/lightbox.init.js"></script>
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
        $(function(){
            // Javascript to enable link to tab
            var hash = location.hash.replace(/^#/, '');  // ^ means starting, meaning only match the first hash
            console.log('Hash :', hash)
            if (hash) {
                $('.nav-item a[href="#' + hash + '"]').tab('show');
            }

            // Change hash for page-reload
            $('.nav-item a').on('shown.bs.tab', function (e) {
                window.location.hash = e.target.hash;
            })
        })

        function calculatePrice() {
            let totalPrice = 0;
            let row_sub_total = 0
            let discount_type = $(document).find('.discount_type').val()
            let discount = $(document).find('.discount').val()

            $('.service_price').each(function (){
                let qty = $(this).closest('tr').find('.service_qty').val()
                let row_discount = $(this).closest('tr').find('.service_discount').val()
                if(qty){
                    if($(this).val()){
                        row_sub_total = (parseFloat($(this).val()) * parseFloat(qty))
                        row_sub_total = row_sub_total - (row_sub_total * parseFloat(row_discount/100))
                        totalPrice+= row_sub_total
                    }
                    $(this).closest('tr').find('.row_sub_total').text(row_sub_total.toFixed(2))
                    $(this).closest('tr').find('.row_sub_total_input').val(row_sub_total.toFixed(2))
                }
            })

            $(document).find('.sub_total_price').text(totalPrice.toFixed(2))
            $(document).find('.sub_total_price_input').val(totalPrice.toFixed(2))
            if(discount_type ==='Percent'){
                $(document).find('.total_price').text((totalPrice - (totalPrice * (discount/100))).toFixed(2))
                $(document).find('.total_price_input').val((totalPrice - (totalPrice * (discount/100))).toFixed(2))
            }else{
                $(document).find('.total_price').text((totalPrice - discount).toFixed(2))
                $(document).find('.total_price_input').val((totalPrice - discount).toFixed(2))
            }

        }

        //on input price input
        $(document).on('input','.service_price',function (){
            calculatePrice();
        })
        $(document).on('input','.service_qty',function (){
            calculatePrice();
        })
        $(document).on('input','.discount',function (){
            calculatePrice();
        })

        $(document).on('input','.service_discount',function (){
            calculatePrice();
        })

        $(document).on('change','.discount_type',function (){
            calculatePrice();
        })

        var addSerialNumber = function () {
            $('table tbody tr').each(function(index) {
                $(this).find('td:nth-child(1)').html(index+1);
            });
        };

        $(document).on('click','.invoice_row_plus_btn',function (){
            let inner = $('tbody tr:last-child').clone();
            $('tbody').append(inner)
            $('tbody tr:last-child td.delete_btn_td').html('<button type="button" class="btn btn-danger invoice_row_delete_btn mb-2"><i class="fa fa-trash"></i></button>')
            addSerialNumber()
        })

        //on click add another link input field
        $(document).on('click','.invoice_row_delete_btn',function (){
            $(this).closest('tr').remove()
            addSerialNumber()
        })
    </script>
@stop
