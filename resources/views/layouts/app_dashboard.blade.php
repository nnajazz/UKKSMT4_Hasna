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

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-dashboards">Dashboards</li>

                        <li>
                            <a href="index.html">
                                <i class="icon nav-icon" data-feather="monitor"></i>
                                <span class="menu-item" data-key="t-sales">Sales</span>
                                <span class="badge rounded-pill badge-secondary-subtle">5+</span>
                            </a>
                        </li>

                        <li>
                            <a href="dashboards-analytics.html">
                                <i class="icon nav-icon" data-feather="pie-chart"></i>
                                <span class="menu-item" data-key="t-analytics">Analytics</span>
                            </a>
                        </li>

                        <li class="menu-title" data-key="t-applications">Applications</li>

                        <li>
                            <a href="apps-calendar.html">
                                <i class="icon nav-icon" data-feather="calendar"></i>
                                <span class="menu-item" data-key="t-calendar">Calendar</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-chat.html">
                                <i class="icon nav-icon" data-feather="message-square"></i>
                                <span class="menu-item" data-key="t-chat">Chat</span>
                                <span class="badge rounded-pill badge-danger-subtle" data-key="t-hot">Hot</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-kanban-board.html">
                                <i class="icon nav-icon" data-feather="trello"></i>
                                <span class="menu-item" data-key="t-kanban">Kanban Board</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-file-manager.html">
                                <i class="icon nav-icon" data-feather="folder"></i>
                                <span class="menu-item" data-key="t-filemanager">File Manager</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="mail"></i>
                                <span class="menu-item" data-key="t-email">Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                <li><a href="email-read.html" data-key="t-read-email">Read Email</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="book"></i>
                                <span class="menu-item" data-key="t-contacts">Contacts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                <li><a href="contacts-list.html" data-key="t-user-list">User List</a></li>
                                <li><a href="user-settings.html" data-key="t-user-settings">User Settings</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="apps-gallery.html">
                                <i class="icon nav-icon" data-feather="image"></i>
                                <span class="menu-item" data-key="t-gallery">Gallery</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="briefcase"></i>
                                <span class="menu-item" data-key="t-projects">Projects</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="projects-grid.html" data-key="t-p-grid">Projects Grid</a></li>
                                <li><a href="projects-list.html" data-key="t-p-list">Projects List</a></li>
                                <li><a href="projects-overview.html" data-key="t-p-overview">Project Overview</a></li>
                                <li><a href="projects-create.html" data-key="t-create-new">Create New</a></li>
                            </ul>
                        </li>

                        <li class="menu-title" data-key="t-layouts">Layouts</li>

                        <li>
                            <a href="layouts-horizontal.html">
                                <i class="icon nav-icon" data-feather="layout"></i>
                                <span class="menu-item" data-key="t-horizontal">Horizontal</span>
                            </a>
                        </li>

                        <li class="menu-title" data-key="t-pages">Pages</li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-feather="user"></i>
                                <span class="menu-item" data-key="t-authentication">Authentication</span>
                                <span class="badge rounded-pill bg-info">9</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-signin">Sign In</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-signin-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-signin-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-signup">Sign Up</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-signup-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-signup-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-signout">Sign Out</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-signout-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-signout-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-lock-screen">Lock Screen</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-lockscreen-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-lockscreen-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-forgot-password">Forgot Password</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-forgotpassword-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-forgotpassword-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-reset-password">Reset Password</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-resetpassword-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-resetpassword-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-email-verification">Email Verification</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-emailverification-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-emailverification-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-2step-verification">2-step Verification</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-2step-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-2step-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-thankyou">Thank you</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-thankyou-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-thankyou-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="alert-circle"></i>
                                <span class="menu-item" data-key="t-error-pages">Error Pages</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="error-404-basic.html" data-key="t-error-404-basic">404 Basic</a></li>
                                <li><a href="error-404-cover.html" data-key="t-error-404-cover">404 Cover</a></li>
                                <li><a href="error-500-basic.html" data-key="t-error-500-basic">500 Basic</a></li>
                                <li><a href="error-500-cover.html" data-key="t-error-500-cover">500 Cover</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="file-text"></i>
                                <span class="menu-item" data-key="t-utility">Utility</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                <li><a href="pages-profile.html" data-key="t-profile">Profile</a></li>
                                <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                                <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="tag"></i>
                                <span class="menu-item" data-key="t-pricing">Pricing</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pricing-basic.html" data-key="t-basic">Basic</a></li>
                                <li><a href="pricing-table.html" data-key="t-table">Table</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="file"></i>
                                <span class="menu-item" data-key="t-invoices">Invoices</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="invoices-list.html" data-key="t-invoice-list">Invoice List</a></li>
                                <li><a href="invoices-detail.html" data-key="t-invoice-detail">Invoice Detail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="award"></i>
                                <span class="menu-item" data-key="t-timeline">Timeline</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="timeline-center.html" data-key="t-center-view">Center View</a></li>
                                <li><a href="timeline-left.html" data-key="t-left-view">Left View</a></li>
                                <li><a href="timeline-horizontal.html" data-key="t-horizontal-view">Horizontal View</a></li>
                            </ul>
                        </li>

                        <li class="menu-title" data-key="t-components">Components</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="package"></i>
                                <span class="menu-item" data-key="t-ui-elements">UI Elements</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                                <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                                <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                                <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                                <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                                <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                                <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                                <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                                <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                                <li><a href="ui-placeholders.html" data-key="t-placeholders">Placeholders</a></li>
                                <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                                <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs & Accordions</a></li>
                                <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                                <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                                <li><a href="ui-general.html" data-key="t-general">General</a></li>
                                <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                                <li><a href="ui-utilities.html" data-key="t-utilities">Utilities</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="cpu"></i>
                                <span class="menu-item" data-key="t-extend-ui">Extended UI</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                                <li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                                <li><a href="extended-sweet-alert.html" data-key="t-sweetalert">SweetAlert 2</a></li>
                                <li><a href="extended-rating.html" data-key="t-rating">Rating</a></li>
                                <li><a href="extended-notifications.html" data-key="t-notifications">Notifications</a></li>
                                <li><a href="extended-swiperslider.html" data-key="t-swiperslider">Swiper Slider</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="widgets.html">
                                <i class="icon nav-icon" data-feather="grid"></i>
                                <span class="menu-item" data-key="t-widgets">Widgets</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="edit-3"></i>
                                <span class="menu-item" data-key="t-forms">Forms</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-elements.html" data-key="t-basic-elements">Basic Elements</a></li>
                                <li><a href="form-validation.html" data-key="t-validation">Validation</a></li>
                                <li><a href="form-advanced.html" data-key="t-advanced-plugins">Advanced Plugins</a></li>
                                <li><a href="form-editors.html" data-key="t-editors">Editors</a></li>
                                <li><a href="form-uploads.html" data-key="t-file-upload">File Upload</a></li>
                                <li><a href="form-wizard.html" data-key="t-wizard">Wizard</a></li>
                                <li><a href="form-mask.html" data-key="t-mask">Mask</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="database"></i>
                                <span class="menu-item" data-key="t-tables">Tables</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html" data-key="t-bootstrap-basic">Bootstrap Basic</a></li>
                                <li><a href="tables-advanced.html" data-key="t-advanced-tables">Advance Tables</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="bar-chart-2"></i>
                                <span class="menu-item" data-key="t-apex-charts">Apex Charts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-line.html" data-key="t-line">Line</a></li>
                                <li><a href="charts-area.html" data-key="t-area">Area</a></li>
                                <li><a href="charts-column.html" data-key="t-column">Column</a></li>
                                <li><a href="charts-bar.html" data-key="t-bar">Bar</a></li>
                                <li><a href="charts-mixed.html" data-key="t-mixed">Mixed</a></li>
                                <li><a href="charts-timeline.html" data-key="t-timeline">Timeline</a></li>
                                <li><a href="charts-candlestick.html" data-key="t-candlestick">Candlestick</a></li>
                                <li><a href="charts-boxplot.html" data-key="t-boxplot">Boxplot</a></li>
                                <li><a href="charts-bubble.html" data-key="t-bubble">Bubble</a></li>
                                <li><a href="charts-scatter.html" data-key="t-scatter">Scatter</a></li>
                                <li><a href="charts-heatmap.html" data-key="t-heatmap">Heatmap</a></li>
                                <li><a href="charts-treemap.html" data-key="t-treemap">Treemap</a></li>
                                <li><a href="charts-pie.html" data-key="t-pie">Pie</a></li>
                                <li><a href="charts-radialbar.html" data-key="t-radialbar">Radialbar</a></li>
                                <li><a href="charts-radar.html" data-key="t-radar">Radar</a></li>
                                <li><a href="charts-polararea.html" data-key="t-polararea">Polararea</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="archive"></i>
                                <span class="menu-item" data-key="t-icons">Icons</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-unicons.html" data-key="t-unicons">Unicons</a></li>
                                <li><a href="icons-feathericons.html" data-key="t-feather-icons">Feather icons</a></li>
                                <li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
                                <li><a href="icons-materialdesign.html" data-key="t-material-design">Material Design</a></li>
                                <li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font Awesome 5</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="map-pin"></i>
                                <span class="menu-item" data-key="t-maps">Maps</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.html" data-key="t-google">Google</a></li>
                                <li><a href="maps-vector.html" data-key="t-vector">Vector</a></li>
                                <li><a href="maps-leaflet.html" data-key="t-leaflet">Leaflet</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="icon nav-icon" data-feather="share-2"></i>
                                <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                                <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
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
</body>


<!-- Mirrored from preview.pichforest.com/dashonic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2024 09:53:37 GMT -->

</html>