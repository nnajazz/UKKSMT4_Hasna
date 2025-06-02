<!doctype html>
<html lang="en">


<!-- Mirrored from preview.pichforest.com/dashonic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2024 09:52:54 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Sales Dashboard | Dashonic - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assetsa/images/favicon.ico') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
@include('include.styledash')

<body>

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <!-- nav -->
        @include('layouts.assets.nav')

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assetsa/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assetsa/images/logo-dark.png') }}" alt="" height="22">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('assetsa/images/logo-light.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('assetsa/images/logo-sm-light.png') }}" alt="" height="22">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                @php
                $user = auth()->user();
                $userReference = $user?->userReference;
                $isStudent = $userReference?->reference_type === 'App\\Models\\Student';

                $people = null;
                if ($userReference && !$isStudent) {
                $employee = $userReference->reference;
                $employee->load('people');
                $people = $employee->people;
                }
                @endphp

                <!-- Sidebar -left -->
                <div class="h-100" data-simplebar>
                    <!-- Sidebar User Info -->
                    <div class="leftbar-user text-center py-4">
                        <a href="pages-profile.html">
                            <img src="{{ asset('assetsa/images/users/kucing.jpg') }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <div class="mt-2 fw-semibold">
                                {{ $people->name ?? $user->name ?? 'Guest' }}
                            </div>

                            @if ($isStudent)
                            <div class="text-muted small">
                                Rp {{ number_format($userReference->reference->saldo->saldo ?? 0, 0, ',', '.') }}
                            </div>
                            @endif
                        </a>
                    </div>

                    <!-- Sidebar Menu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu list-unstyled" id="side-menu">

                            <li class="menu-title" data-key="t-navigation">Navigation</li>
                            <li>
                                <a href="/dashboard">
                                    <i data-feather="home" class="icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            @if ($isStudent)
                            <!-- Menu untuk Siswa -->
                            <li class="menu-title" data-key="t-order">Order Here</li>
                            <li>
                                <a href="{{ route('order.index') }}">
                                    <i data-feather="shopping-cart" class="icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-order">Order</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('order.history') }}">
                                    <i data-feather="clock" class="icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-history">History Pembelian</span>
                                </a>
                            </li>
                            @else
                            <!-- Menu untuk Non-Siswa -->
                            <li class="menu-title" data-key="t-hr">Human Resources</li>
                            <li>
                                <a href="{{ route('student') }}">
                                    <i data-feather="user" class="icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-student">Student</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('employee') }}">
                                    <i data-feather="users" class="icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-employee">Employee</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-store">Store Management</li>
                            <li>
                                <a href="{{ route('room_management.room.tampilR') }}">
                                    <i data-feather="grid" class="icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-room">Room</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('product_management.product.tampilP') }}">
                                    <i data-feather="package" class="icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-product">Product</span>
                                </a>
                            </li>
                            @endif

                        </ul>
                    </div>
                    <!-- End Sidebar Menu -->

                    <div class="clearfix"></div>
                </div>


                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- content -->
        @yield('content')
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout"
                        id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout"
                        id="layout-horizontal" value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode"
                        id="layout-mode-light" value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode"
                        id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width"
                        id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width"
                        id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Position</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position"
                        id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                    <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position"
                        id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                    <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                </div>

                <h6 class="mt-4 mb-3">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color"
                        id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color"
                        id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <div id="sidebar-setting">
                    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction"
                        id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction"
                        id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('include.scriptdash')
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Inisialisasi Feather Icons
        if (typeof feather !== 'undefined') {
            feather.replace();
        }
    </script>

</body>


<!-- Mirrored from preview.pichforest.com/dashonic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2024 09:53:37 GMT -->

</html>