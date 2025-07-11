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
                                <h4 class="mb-0">Sales Analytics</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashonic</a></li>
                                        <li class="breadcrumb-item active">Sales Analytics</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="font-size-xs text-uppercase">Total Revenue</h6>
                                            <h4 class="mt-4 mb-2 d-flex align-items-center">
                                                $46.34k
                                            </h4>
                                            <div class="text-muted">Earning this month</div>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><span class="text-muted">Monthly<i
                                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apex-charts mt-3" id="sparkline-chart-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="font-size-xs text-uppercase">Total Refunds</h6>
                                            <h4 class="mt-4 mb-2 d-flex align-items-center">
                                                $895.02
                                            </h4>
                                            <div class="text-muted">Refunds this month</div>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><span class="text-muted">Monthly<i
                                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apex-charts mt-3" id="sparkline-chart-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="font-size-xs text-uppercase">Active Users</h6>
                                            <h4 class="mt-4 mb-2 d-flex align-items-center">
                                                6,985
                                            </h4>
                                            <div class="text-muted">Users this Week</div>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><span class="text-muted">Weekly<i
                                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apex-charts mt-3" id="sparkline-chart-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="font-size-xs text-uppercase">All Time Orders</h6>
                                            <h4 class="mt-4 mb-2 d-flex align-items-center">
                                                12,584
                                            </h4>
                                            <div class="text-muted">Total Number of Orders</div>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><span class="text-muted">Yearly<i
                                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apex-charts mt-3" id="sparkline-chart-4"></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row-->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="alert alert-warning border-0 d-flex align-items-center" role="alert">
                                        <i class="uil uil-exclamation-triangle font-size-16 text-warning me-2"></i>
                                        <div class="flex-grow-1 text-truncate">
                                            Your free trial expired in <b>21</b> days.
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="pricing-basic.html" class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-sm-7">
                                            <p class="font-size-18">Upgrade your plan from a <span class="fw-semibold">Free
                                                    trial</span>, to ‘Premium Plan’ <i class="mdi mdi-arrow-right"></i></p>
                                            <div class="mt-4">
                                                <a href="pricing-basic.html" class="btn btn-primary">Upgrade Account!</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <img src="{{ asset('assetsa/images/illustrator/2.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-reset" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold">Report By:</span> <span
                                                    class="text-muted">Monthly<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="card-title mb-4">Earning Reports</h4>

                                    <div class="row align-items-center">
                                        <div class="col-sm-7">
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <p class="text-muted mb-2">This Month</p>
                                                    <h5>$12,582<small
                                                            class="badge badge-success-subtle font-13 ms-2">+15%</small></h5>
                                                </div>

                                                <div class="col-6">
                                                    <p class="text-muted mb-2">Last Month</p>
                                                    <h5>$98,741</h5>
                                                </div>
                                            </div>
                                            <p class="text-muted"><span class="text-success me-1"> 25.2%<i
                                                        class="mdi mdi-arrow-up"></i></span>From previous period</p>

                                            <div class="mt-4">
                                                <a href="#" class="btn btn-secondary-subtle btn-sm">Generate Reports <i
                                                        class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class="col-sm-5">
                                            <div class="mt-4 mt-0">
                                                <div id="donut_chart" class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end col-->

                        <div class="col-xl-8">
                            <div class="card card-h-100">
                                <div class="card-body">
                                    <div class="float-end">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-title mb-4">Sales Analytics</h4>

                                    <div class="mt-1">
                                        <ul class="list-inline main-chart mb-0 text-center">
                                            <li class="list-inline-item chart-border-left me-0 border-0">
                                                <h3 class="text-primary">$<span data-plugin="counterup">3.85k</span><span
                                                        class="text-muted d-inline-block fw-normal font-size-15 ms-2">Income</span>
                                                </h3>
                                            </li>
                                            <li class="list-inline-item chart-border-left me-0">
                                                <h3><span data-plugin="counterup">258</span><span
                                                        class="text-muted d-inline-block fw-normal font-size-15 ms-2">Sales</span>
                                                </h3>
                                            </li>
                                            <li class="list-inline-item chart-border-left me-0">
                                                <h3><span data-plugin="counterup">52</span>k<span
                                                        class="text-muted d-inline-block fw-normal font-size-15 ms-2">Users</span>
                                                </h3>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-3">
                                        <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card card-h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mb-4">Orders</h4>

                                        <div>
                                            <div class="dropdown d-inline">
                                                <a class="dropdown-toggle text-muted me-3 mb-3 align-middle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class='bx bx-search font-size-16'></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                                    <form class="p-2">
                                                        <div class="search-box">
                                                            <div class="position-relative">
                                                                <input type="text"
                                                                    class="form-control rounded bg-light border-0"
                                                                    placeholder="Search...">
                                                                <i class="bx bx-search font-size-16 search-icon"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="dropdown d-inline">
                                                <a class="dropdown-toggle text-reset mb-3" href="#"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold">Report By:</span> <span
                                                        class="text-muted">Monthly<i
                                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-nowrap mb-0 align-middle table-check">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="rounded-start" style="width: 15px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input font-size-16" type="checkbox"
                                                                value="" id="checkAll">
                                                            <label class="form-check-label" for="checkAll"> </label>
                                                        </div>
                                                    </th>
                                                    <th>ID</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Customer</th>
                                                    <th>Purchased</th>
                                                    <th colspan="2" class="rounded-end">Revenue</th>
                                                </tr>
                                                <!-- end tr -->
                                            </thead>
                                            <!-- end thead -->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input font-size-16" type="checkbox"
                                                                value="" id="flexCheckexampleone">
                                                            <label class="form-check-label" for="flexCheckexampleone">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        #DK1018
                                                    </td>
                                                    <td>
                                                        1 Jun, 11:21
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <i class="mdi mdi-check-circle-outline text-success"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Paid</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="{{ asset('assetsa/images/users/avatar-2.jpg') }}"
                                                                    class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                                    alt="Error">
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                        class="text-reset">Alex Fox</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Wireframing Kit for Figma
                                                    </td>

                                                    <td>
                                                        $129.99
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i
                                                                    class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                        Edit</a></li>
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                                        Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- end /tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input font-size-16" type="checkbox"
                                                                value="" id="flexCheckexamplethree">
                                                            <label class="form-check-label" for="flexCheckexamplethree">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        #DK1017
                                                    </td>
                                                    <td>
                                                        29 May, 18:36
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <i class="mdi mdi-check-circle-outline text-success"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Paid</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="{{ asset('assetsa/images/users/avatar-3.jpg') }}"
                                                                    class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                                    alt="Error">
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                        class="text-reset">Joya Calvert</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Mastering the Grid <span class="text-muted">+2 more</span>
                                                    </td>

                                                    <td>
                                                        $228.88
                                                    </td>

                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i
                                                                    class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                        Edit</a></li>
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                                        Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- end /tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input font-size-16" type="checkbox"
                                                                value="" id="flexCheckexamplefour">
                                                            <label class="form-check-label" for="flexCheckexamplefour">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        #DK1016
                                                    </td>
                                                    <td>
                                                        25 May , 08:09
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <i
                                                                    class="mdi mdi-arrow-left-thin-circle-outline text-warning"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Refunded</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="{{ asset('assetsa/images/users/avatar-4.jpg') }}"
                                                                    class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                                    alt="Error">
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                        class="text-reset">Gracyn Make</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Wireframing Kit for Figma
                                                    </td>

                                                    <td>
                                                        $9.99
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i
                                                                    class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                        Edit</a></li>
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                                        Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- end /tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input font-size-16" type="checkbox"
                                                                value="" id="flexCheckexamplefive">
                                                            <label class="form-check-label" for="flexCheckexamplefive">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        #DK1015
                                                    </td>
                                                    <td>
                                                        19 May , 14:09
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <i class="mdi mdi-check-circle-outline text-success"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Paid</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="{{ asset('assetsa/images/users/avatar-5.jpg') }}"
                                                                    class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                                    alt="Error">
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                        class="text-reset">Monroe Mock</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Spiashify 2.0
                                                    </td>

                                                    <td>
                                                        $44.00
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i
                                                                    class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                        Edit</a></li>
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                                        Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- end /tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input font-size-16" type="checkbox"
                                                                value="" id="flexCheckexamplesix">
                                                            <label class="form-check-label" for="flexCheckexamplesix">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        #DK1014
                                                    </td>
                                                    <td>
                                                        10 May , 10:00
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <i class="mdi mdi-check-circle-outline text-success"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Paid</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="{{ asset('assetsa/images/users/avatar-6.jpg') }}"
                                                                    class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                                    alt="Error">
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                        class="text-reset">Lauren Bond</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Mastering the Grid
                                                    </td>

                                                    <td>
                                                        $75.87
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i
                                                                    class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                        Edit</a></li>
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                                        Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- end /tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input font-size-16" type="checkbox"
                                                                value="" id="flexCheckexamplenine">
                                                            <label class="form-check-label" for="flexCheckexamplenine">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        #DK1011
                                                    </td>
                                                    <td>
                                                        29 Apr , 12:46
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <i class="mdi mdi-close-circle-outline text-danger"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Changeback</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="{{ asset('assetsa/images/users/avatar-9.jpg') }}"
                                                                    class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                                    alt="Error">
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                        class="text-reset">Ricardo Schaefer</a> </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Spiashify 2.0
                                                    </td>

                                                    <td>
                                                        $63.99
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i
                                                                    class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                        Edit</a></li>
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                                        Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- end /tr -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input font-size-16" type="checkbox"
                                                                value="" id="flexCheckDefaultexample">
                                                            <label class="form-check-label" for="flexCheckDefaultexample">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        #DK1010
                                                    </td>
                                                    <td>
                                                        27 Apr , 10:53
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <i class="mdi mdi-check-circle-outline text-success"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Paid</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="{{ asset('assetsa/images/users/avatar-10.jpg') }}"
                                                                    class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                                    alt="Error">
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                        class="text-reset">Arvi Hasan</a> </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Wireframing Kit for Figma
                                                    </td>

                                                    <td>
                                                        $51.00
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i
                                                                    class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                        Edit</a></li>
                                                                <li><a href="#" class="dropdown-item"><i
                                                                            class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                                        Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- end /tr -->

                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card card-h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mb-4">Sales by County</h4>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-reset" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold">Report By:</span> <span
                                                    class="text-muted">Monthly<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="world-map-markers" style="height: 242px;"></div>

                                    <div class="pt-3 pb-2">
                                        <p class="mb-0 fw-medium">USA <span class="float-end">75%</span></p>
                                        <div class="progress animated-progess custom-progress mt-2">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                            </div>
                                        </div>

                                        <p class="mt-4 mb-0 fw-medium">Russia <span class="float-end">55%</span></p>
                                        <div class="progress animated-progess custom-progress mt-2">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                            </div>
                                        </div>

                                        <p class="mt-4 mb-0 fw-medium">Australia <span class="float-end">85%</span></p>
                                        <div class="progress animated-progess custom-progress mt-2">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; Dashonic.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://pichforest.com/" target="_blank" class="text-reset">Pichforest</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
@endsection