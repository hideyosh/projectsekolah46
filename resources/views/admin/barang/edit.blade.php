@extends('admin.app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="form-valide-with-icon" method="POST" action="{{ route('barang.store') }}" novalidate="">
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
                    <label class="text-label">Nama Barang</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-box-seam"></i></span>
                        </div>
                        <input type="text" class="form-control" name="nama_barang" required="" value="{{ $barang->nama_barang }}">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="text-label">Tipe</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-view-list"></i></span>
                        </div>
                        {{-- <input type="text" class="form-control" name="tipe" required="" placeholder="Enter a merk barang.." required=""> --}}
                        <div class="dropdown bootstrap-select form-control default-select dropup">
                            <select class="form-control default-select" id="sel1" tabindex="-98" name="tipe">
                                <option>Pilih Tipe</option>
                                <option>Proyektor/Infocus</option>
                                <option>Alat Tulis</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="text-label">Merk</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-badge-tm-fill"></i></span>
                        </div>
                        <input type="text" class="form-control" name="merk" required="" value="{{ $barang->merk }}" required="">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="text-label">Jumlah Barang</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-list-ol"></i></span>
                        <input type="text" class="form-control" name="jumlah_barang" aria-selected="" value="{{ $barang->jumlah_barang }}" required="">
                        <span class="input-group-text">
                            Buah
                        </span>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn mr-2 px-4 btn-primary">Submit</button>
                    <a href="/barang" class="btn btn-light px-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
