@extends('layouts.app_dashboard')

@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-h-100">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Form Layouts</h4>
                            <a href="https://getbootstrap.com/docs/5.1/forms/layout/#utilities" target="_blank" class="btn btn-sm btn-secondary-subtle">Docs <i class="mdi mdi-arrow-right align-middle"></i></a>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">First name</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Email</label>
                                                <input type="email" class="form-control" id="formrow-email-input">
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Password</label>
                                                <input type="password" class="form-control" id="formrow-password-input">
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->

                                    <div class="form-group">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="formrow-customCheck">
                                            <label class="form-check-label" for="formrow-customCheck">Check me out</label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </form><!-- end form -->
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
            <!-- End Form Layout -->
        </div>
    </div>
</div>
@endsection