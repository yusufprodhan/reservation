@extends('layouts.backend.app')
@section('page-css')
    <!-- DataTables -->
    <link href="{!! asset('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') !!}" rel="stylesheet" type="text/css" />
@stop
@section('title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                @php
                    $url = explode('/', \Illuminate\Support\Facades\URL::current());
                @endphp
                <h4 class="page-title mb-0 font-size-18">{{end($url).' '.__('List')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('Order List')}}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-dark table-bordered dt-responsive nowrap order_datatable"
                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th>{{__('Sl')}}</th>
                    <th width="30%">{{__('Title')}}</th>
                    <th>{{__('Order Id')}}</th>
                    <th>{{__('Qty')}}</th>
                    <th>{{__('Time')}}</th>
                    <th>{{__('Submitted')}}</th>
                    <th>{{__('Price')}}</th>
                    <th>{{__('Status')}}</th>
                    <th width="10%">{{__('Action')}}</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('page-script')
    <!-- Required datatable js -->
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Buttons examples -->
    <script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/libs/jszip/jszip.min.js"></script>
    <script src="/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Datatable init js -->
    <script src="/assets/js/pages/datatables.init.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.order_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('home.order.list') }}",
                dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [0,5]
                        }
                    },
                    {
                        extend: 'excel',
                    }
                ],
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'job_title', name: 'job_title'},
                    {
                        "data": 'order_id', name: 'order_id ',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="/order/' + row.id + '" style="color: yellow">' + data + '</a>';
                            }
                            return data;
                        }
                    },
                    {data: 'image_quantity', name: 'image_quantity'},
                    {data: 'turnaround', name: 'turnaround'},
                    {data: 'submitted', name: 'submitted'},
                    {
                        data: 'price', name: 'price',
                        "render": function(data, type, row, meta){
                            if(row.is_paid === 0){
                                data = '<p style="color: yellow">' + data + '</p>';
                            }else{
                                data = '<p style="color: green">' + data + '</p>';
                            }
                            return data;
                        }
                    },
                    {data: 'status', name: 'status'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ],
            })
        })
    </script>
@stop
