@extends('layouts.app_dashboard')

@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Order</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Order</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xxl-12 col-xl-12">
                    <div class="card">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Room Table</h4>
                            <a href="{{ route('product_management.product.tambahP')}}" class="btn btn-sm btn-primary">Add Order</a>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No.</th>
                                            <th>Name Order</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($orders as $i => $item)
                                        <tr>
                                            <td>{{$i +1}}</td>
                                            <td>{{$item->product->name}}</td>
                                            <td>Rp {{ number_format($item->product->price, 0, ',', '.' )}}</td>
                                            @php
                                            switch($item->status){
                                            case 0 : $status = "PENDING";break;
                                            case 1 : $status = "PROGRESS";break;
                                            case 2 : $status = "SELESAI";break;
                                            }
                                            @endphp
                                            <td>{{ $status }}</td>
                                        </tr>
                                        @empty
                                        @endforelse
                                    </tbody><!-- end tbody-->
                                </table><!-- end table-->
                            </div><!-- end table responsive -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
@endsection