@extends('admin.app')
@section('content')
<div class="container-fluid">
    <div class="header-left mb-4">
        <div class="dashboard_bar">
            <h1>{{ $title }}</h1>
            <div class="row">
                <div class="col-xl-9 col-xxl-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <span class="mr-4">
<<<<<<< HEAD
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="53" fill="bg-primary" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                            </svg>
                                        </span>
                                        <div class="media-body ml-1">
                                            <p class="mb-2">User</p>
                                            <h3 class="mb-0 text-black font-w600">{{ $admins }}</h3>
=======
                                            <i class="bi bi-person-fill fs-1 text-primary"></i>
                                        </span>
                                        <div class="media-body ml-1">
                                            <p class="mb-2">Admin</p>
                                            <h3 class="mb-0 text-secondary fw-400">{{ $admins }}</h3>
>>>>>>> 51b5ca69bacb11a9d6297217da9991aa3d1c9caf
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
                                            <i class="bi bi-box-fill fs-1 text-primary"></i>
                                        </span>
                                        <div class="media-body ml-1">
                                            <p class="mb-2">Barang</p>
                                            <h3 class="mb-0 text-secondary fw-400">{{ $admins }}</h3>
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
