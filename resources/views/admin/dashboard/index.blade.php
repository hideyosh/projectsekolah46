@extends('admin.app')
@section('content')
<div class="container-fluid">
    <div class="header-left mb-4">
        <div class="dashboard_bar">
            <h1>{{ $title }}</h1>
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <span class="mr-4">
                                            <i class="bi bi-person-fill fs-1 text-primary"></i>
                                        </span>
                                        <div class="media-body ml-1">
                                            <p class="mb-2">Admin</p>
                                            <h3 class="mb-0 text-secondary fw-400">{{ $admins }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <span class="mr-4">
                                            <i class="bi bi-person-fill fs-1 text-primary"></i>
                                        </span>
                                        <div class="media-body ml-1">
                                            <p class="mb-2">User</p>
                                            <h3 class="mb-0 text-secondary fw-400">{{ $users }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <span class="mr-4">
                                            <i class="bi bi-box-fill fs-1 text-primary"></i>
                                        </span>
                                        <div class="media-body ml-1">
                                            <p class="mb-2">Barang</p>
                                            <h3 class="mb-0 text-secondary fw-400">{{ $barangs }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
