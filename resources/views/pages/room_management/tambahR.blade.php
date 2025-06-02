@extends('layouts.app_dashboard')
<title>Room | Aplikasi</title>

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
                            <li class="breadcrumb-item active">Student</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Card Form -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Tambah Room</h4>
                            <a href="https://getbootstrap.com/docs/5.1/forms/layout/#utilities" target="_blank" class="btn btn-sm btn-secondary-subtle">
                                Docs <i class="mdi mdi-arrow-right align-middle"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('room_management.room.store') }}">
                                @csrf
                                <!-- Baris 1: NIS dan NISN -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="no">Nomor Ruangan</label>
                                        <input type="text" class="form-control" id="no" name="no" placeholder="no">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="name">Nama Ruangan</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
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