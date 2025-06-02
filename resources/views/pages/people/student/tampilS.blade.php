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
                        <h4 class="mb-0">Data Student</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Data Student</li>
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
                            <h4 class="card-title">Data Student</h4>
                            <a href="{{ route('students.tambahS') }}" class="btn btn-sm btn-primary">Tambah Siswa</a>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>NISN/NIS</th>
                                            <th>Name</th>
                                            <th>Sex</th>
                                            <th>place and date of birth</th>
                                            <th>Saldo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($student as $item)
                                        <tr>
                                            <td>{{optional($item->reference)->nisn}} / {{optional($item->reference)->nis}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->sex}}</td>
                                            <td>{{$item->pob}} -- {{$item->dob}}</td>
                                            <td>Rp {{ number_format($item->reference->saldo->saldo ?? 0, 0, ',', '.')}}</td>
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