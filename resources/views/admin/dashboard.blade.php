@extends('layouts.backend.app')

@section('title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('Dashboard')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">{{__('Welcome to Dashboard')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@stop
<!-- end page title -->
@section('content')
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="fas fa-clock"></i>
                        </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Orders Placed Today</div>
                        </div>
                    </div>
                    <h4 class="mt-4">2,456</h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="fas fa-spinner"></i>
                        </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Order in Progress</div>
                        </div>
                    </div>
                    <h4 class="mt-4">1,368</h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="fas fa-cart-plus"></i>
                        </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Total Orders</div>
                        </div>
                    </div>
                    <h4 class="mt-4">1,368</h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-warning rounded">
                            <i class="fas fa-money-bill-wave"></i>
                        </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Unpaid Amount</div>
                        </div>
                    </div>
                    <h4 class="mt-4">$ 1,368</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Recent Orders</h4>
                    <div class="table-responsive">
                        <table class="table table-centered">
                            <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Id no.</th>
                                <th scope="col">Billing Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col" colspan="2">Payment Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>15/01/2020</td>
                                <td>
                                    <a href="#" class="text-body fw-medium">#SK1235</a>
                                </td>
                                <td>Werner Berlin</td>
                                <td>$ 125</td>
                                <td><span class="badge badge-soft-success font-size-12">Paid</span>
                                </td>
                                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                            </tr>
                            <tr>
                                <td>16/01/2020</td>
                                <td>
                                    <a href="#" class="text-body fw-medium">#SK1236</a>
                                </td>
                                <td>Robert Jordan</td>
                                <td>$ 118</td>
                                <td><span class="badge badge-soft-danger font-size-12">Chargeback</span>
                                </td>
                                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                            </tr>
                            <tr>
                                <td>17/01/2020</td>
                                <td>
                                    <a href="#" class="text-body fw-medium">#SK1237</a>
                                </td>
                                <td>Daniel Finch</td>
                                <td>$ 115</td>
                                <td><span class="badge badge-soft-success font-size-12">Paid</span>
                                </td>
                                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                            </tr>
                            <tr>
                                <td>18/01/2020</td>
                                <td>
                                    <a href="#" class="text-body fw-medium">#SK1238</a>
                                </td>
                                <td>James Hawkins</td>
                                <td>$ 121</td>
                                <td><span class="badge badge-soft-warning font-size-12">Refund</span>
                                </td>
                                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
