@extends('admin.app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="form-valide-with-icon" method="POST" action="{{ route('tipe.update', $tipe->id) }}" novalidate="">
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
                @method('PUT')
                <div class="form-group mb-4">
                    <label class="text-label">Nama Tipe</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" class="form-control" id="val-username1" name="nama_tipe" required=""  value="{{ $tipe->nama_tipe }}">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn mr-2 px-4 btn-primary">Submit</button>
                    <a href="/user" class="btn btn-light px-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection