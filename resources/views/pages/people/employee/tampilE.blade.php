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
                        <h4 class="mb-0">Data Employee</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Data Epmloyee</li>
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
                            <h4 class="card-title">Data Epmloyee</h4>
                            <a href="{{ route('employee.tambahE') }}" class="btn btn-sm btn-primary">Tambah Epmloyee</a>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No. Pegawai</th>
                                            <th>Name</th>
                                            <th>Sex</th>
                                            <th>place and date of birth</th>
                                            <th>Hire Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($employee as $item)
                                        <tr>
                                            <td>{{ optional($item->reference)->no_pegawai }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->sex }}</td>
                                            <td>{{ $item->pob }} -- {{ $item->dob }}</td>
                                            <td>{{ optional($item->reference)->hire_date }}</td>
                                            <td>...</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6">Tidak ada data karyawan.</td>
                                        </tr>
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