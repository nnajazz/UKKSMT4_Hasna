@extends('layouts.app_dashboard')
<title>Employee | Aplikasi</title>

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Breadcrumb -->
            <div class="row mb-3">
                <div class="col-12">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">People</a></li>
                            <li class="breadcrumb-item active">Employee</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Card Form -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Tambah Employee</h4>
                            <a href="https://getbootstrap.com/docs/5.1/forms/layout/#utilities" target="_blank" class="btn btn-sm btn-secondary-subtle">
                                Docs <i class="mdi mdi-arrow-right align-middle"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('employee.store') }}">
                                @csrf
                                <input type="hidden" name="status" value="active">
                                <input type="hidden" name="role" value="user">

                                <!-- Baris 1: NIS dan NISN -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="no_pegawai">No. Pegawai</label>
                                        <input type="text" class="form-control" id="no_pegawai" name="no_pegawai" placeholder="no pegawai">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="hire">Hire Date</label>
                                        <input type="date" class="form-control" name="hire_date" id="hire">
                                    </div>
                                </div>

                                <!-- Baris 2: Name dan Username -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama ">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="password" class="form-label">Password & Konfirmasi</label>
                                        <div class="input-group">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label d-block">Jenis Kelamin</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" id="L" value="Laki-Laki">
                                            <label class="form-check-label" for="L">Laki-Laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" id="P" value="Perempuan">
                                            <label class="form-check-label" for="P">Perempuan</label>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Tempat & Tanggal Lahir</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="pob" placeholder="Tempat Lahir">
                                            <input type="date" class="form-control" name="dob">
                                        </div>
                                    </div>

                                </div>

                                <!-- Submit -->
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>

                            </form>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
            </div>

        </div>
    </div>
</div>
@endsection