@extends('layouts.backend.app')

@section('title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('Place Order')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('Place Order')}}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
@stop
@section('content')
    <!-- end page title -->
    <form method="post" action="{{route('home.order.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{__('General')}}</h2>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="job_title" class="form-label">{{__('Job Title')}}<span
                                                class="text-danger">*</span></label>
                                        <input
                                            class="form-control @error('job_title') is-invalid @enderror"
                                            name="job_title"
                                            type="text"
                                            placeholder="Job Title"
                                            value="{{old('job_title')}}" required
                                        />
                                        @error('job_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="image_quantity" class="form-label">{{__('Image Quantity')}}<span
                                                class="text-danger">*</span></label>
                                        <input
                                            class="form-control @error('image_quantity') is-invalid @enderror"
                                            name="image_quantity"
                                            type="number"
                                            placeholder="Image Quantity"
                                            value="{{old('image_quantity')}}" required
                                        />
                                        @error('image_quantity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <label for="instruction" class="form-label">Instruction<span
                                            class="text-danger">*</span></label>
                                    <textarea class="mb-3" id="elm1" name="instruction"></textarea>
                                    <div class="mt-2"><small>{{__('Please write instruction properly. Instruction will help designer to edit and retouch your image as per instuction')}}</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Image Complexity</h2>
                        <div class="mt-4">
                            <div class="form-check mb-2 form-check-inline">
                                <input class="form-check-input" type="radio" name="image_complexity"
                                       id="image_complexity" checked value="simple">
                                <label class="form-check-label" for="image_complexity">
                                    {{__('Simple')}}
                                </label>
                            </div>
                            <div class="form-check mb-2 form-check-inline">
                                <input class="form-check-input" type="radio" name="image_complexity"
                                       id="image_complexity" value="medium">
                                <label class="form-check-label" for="image_complexity">
                                    {{__('Medium')}}
                                </label>
                            </div>
                            <div class="form-check mb-2 form-check-inline">
                                <input class="form-check-input" type="radio" name="image_complexity"
                                       id="image_complexity" value="complex">
                                <label class="form-check-label" for="image_complexity">
                                    {{__('Complex')}}
                                </label>
                            </div>
                            <div class="form-check mb-2 form-check-inline">
                                <input class="form-check-input" type="radio" name="image_complexity"
                                       id="image_complexity" value="extreme">
                                <label class="form-check-label" for="image_complexity">
                                    {{__('Extreme')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Return File Extensions</h2>
                        <div class="mt-4">
                            <div class="form-check mb-2 form-check-inline">
                                <input class="form-check-input" type="checkbox" name="return_file_extension[]"
                                       id="return_file_extension" checked value="jpg">
                                <label class="form-check-label" for="return_file_extension">
                                    {{__('JPG')}}
                                </label>
                            </div>
                            <div class="form-check mb-2 form-check-inline">
                                <input class="form-check-input" type="checkbox" name="return_file_extension[]"
                                       id="return_file_extension" value="png">
                                <label class="form-check-label" for="return_file_extension">
                                    {{__('PNG')}}
                                </label>
                            </div>
                            <div class="form-check mb-2 form-check-inline">
                                <input class="form-check-input" type="checkbox" name="return_file_extension[]"
                                       id="return_file_extension" value="pdf">
                                <label class="form-check-label" for="return_file_extension">
                                    {{__('PDF')}}
                                </label>
                            </div>
                            <div class="form-check mb-2 form-check-inline">
                                <input class="form-check-input" type="checkbox" name="return_file_extension[]"
                                       id="return_file_extension" value="psd">
                                <label class="form-check-label" for="return_file_extension">
                                    {{__('PSD')}}
                                </label>
                            </div>
                            <div class="form-check mb-2 form-check-inline">
                                <input class="form-check-input" type="checkbox" name="return_file_extension[]"
                                       id="return_file_extension" value="tif">
                                <label class="form-check-label" for="return_file_extension">
                                    {{__('TIF')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{__('Required Services')}}</h2>
                        <div class="row">
                            @if(isset($pathServices) && !empty($pathServices))
                                @foreach($pathServices as $key=>$path)
                                    <div class="col-4 py-3">
                                        <div class="form-check mb-2 form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="service_id[]"
                                                   id="service_id" {{$key == 0?'checked':''}} value="{{$path->id}}">
                                            <label class="form-check-label" for="service_id">
                                                {{$path->service_name}}
                                                <br/>
                                                <small>{{__('Starting From $')}} {{$path->starting_price}}</small>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{__('Turnaround')}}</h2>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check mb-2 form-check-inline">
                                    <input class="form-check-input" type="radio" name="turnaround"
                                           id="turnaround" value="48" checked>
                                    <label class="form-check-label" for="turnaround">
                                        {{__('48 Hours')}}
                                        <br/>
                                        <small>{{__('Regular Delivery. No extra charge')}}</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check mb-2 form-check-inline">
                                    <input class="form-check-input" type="radio" name="turnaround"
                                           id="turnaround" value="72">
                                    <label class="form-check-label" for="turnaround">
                                        {{__('72 Hours')}}
                                        <br/>
                                        <small>{{__('Regular Delivery. No extra charge')}}</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check mb-2 form-check-inline">
                                    <input class="form-check-input" type="radio" name="turnaround"
                                           id="turnaround" value="flexible">
                                    <label class="form-check-label" for="turnaround">
                                        {{__('Flexible')}}
                                        <br/>
                                        <small>{{__('Flexible Delivery. No extra charge')}}</small>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <div class="row link_wrap my-2">
                                            <div class="col-10">
                                                <input
                                                    class="form-control"
                                                    name="image_link[]"
                                                    type="url"
                                                    placeholder="Images Link"
                                                    value=""
                                                />
                                            </div>
                                            <div class="col-2">
                                                <button type="button" class="btn btn-outline-danger image-link-delete-btn"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </div>
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
                            <div class="col-12">
                                <button type="submit" class="btn btn-success waves-effect waves-light float-end mb-2">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
    <!-- end row -->

@stop

@section('page-script')
    <!--tinymce js-->
    <script src="/assets/libs/tinymce/tinymce.min.js"></script>

    <!-- init js -->
    <script src="/assets/js/pages/form-editor.init.js"></script>

    <script>

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
