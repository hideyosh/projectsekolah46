@extends('app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">Detail Pesan</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="form-valide-with-icon">
                <div class="form-group mb-4">
                    <label class="text-label">Nama User</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-box-seam"></i></span>
                        </div>
                        <p  class="form-control" id="val-username1" style="color:black">{{ $mail->user->name }}</p>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="text-label">Nama Barang</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-view-list"></i></span>
                        </div>
                        <p class="form-control" id="email" style="color:black">{{ $mail->barang->nama_barang }}</p>
                    </div>
                </div>
                <div class="form-group mb-4 mt-4">
                    <label for="text-label">Pesan</label>
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bi bi-badge-tm-fill"></i></span>
                            </div>
                            <p class="form-control" id="email" style="color:black">{{ $mail->pesan }}</p>
                        </div>
                </div>
                <div class="form-group mb-4 mt-4">
                    <label for="text-label">Keterangan</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-list-ol"></i></span>
                        </div>
                        <p class="form-control" id="email" style="color:black">{{ $mail->keterangan}}</p>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <a href="/mail" class="btn mr-2 px-4 btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
