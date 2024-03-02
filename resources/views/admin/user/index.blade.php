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
                <h4 class="page-title mb-0 font-size-18">{{__('User List')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('User List')}}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
@stop
@section('content')
    <div class="row">
        <div class="col-12 overflow-x-scroll">
            <table class="table table-striped table-dark table-bordered dt-responsive nowrap user_datatable"
                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th>{{__('SL')}}</th>
                    <th>{{__('Uid')}}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('Last Access')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Action')}}</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
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
            $('.user_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.user.list') }}",
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
                    {
                        data: 'uid', name: 'uid',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="user/' + row.id + '" style="color: yellow">' + data + '</a>';
                            }
                            return data;
                        }
                    },
                    {
                        "data": 'name', name: 'name',

                    },
                    {
                        data: 'email', name: 'email'
                    },
                    {data: 'last_access_at', name: 'last_access_at'},
                    {data: 'status', name: 'status'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ],
            });
        });
    </script>
@stop
