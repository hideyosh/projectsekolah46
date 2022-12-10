@extends('app')
@section('content')

@if(Auth::user()->role !== 'user')
<div class="container-fluid">
    <div class="header-left mb-4">
        <div class="dashboard_bar">
            <h1>{{ $title1 }}</h1>
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

@else

<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title2 }}</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="form-valide-with-icon" method="POST" action="{{ route('home.store') }}" novalidate="">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                @csrf
                <div class="form-group mb-4">
                    <label for="text-label">Barang</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-box-seam"></i></span>
                        </div>
                        <div class="dropdown bootstrap-select form-control default-select dropup">
                            <select class="form-control default-select" id="sel1" tabindex="-98" name="barang_id">
                                <option value="default">Please Choose Barang ..</option>
                                @foreach ($barang as $barang)
                                    <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="text-label">Jumlah Barang</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-list-ol"></i></span>
                        <input type="text" class="form-control" name="jumlah" aria-selected="" placeholder="Enter a jumlah barang.." required="">
                        <span class="input-group-text">
                            Buah
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn mr-2 px-4 btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

@endsection
