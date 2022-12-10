@extends('admin.app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
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
@endsection
