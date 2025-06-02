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
                        <h4 class="mb-0">Data</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Data</li>
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
                            <h4 class="card-title">Data</h4>
                            <a href="" class="btn btn-sm btn-primary">Tambah Siswa</a>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>mark.otto@example.com</td>
                                            <td>Jl. Merdeka No.1</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>jacob.thornton@example.com</td>
                                            <td>Jl. Sudirman No.5</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>larry.bird@example.com</td>
                                            <td>Jl. Soekarno Hatta No.10</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
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