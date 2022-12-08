@extends('admin.app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>

    <div class="d-flex">
        <a class="btn btn-rounded btn-outline-primary w-25 ms-4 mt-3" href="{{ route('barang.create') }}">Create Barang</a>
        <a class="btn btn-rounded btn-outline-success w-10 ms-3 mt-3" href="{{ route('barang.excel') }}">Add Excel</a>
    </div>

    <div class="card-body pt-0">
        <div class="table-responsive">
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Merk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <td>
                            <p>{{ $barang->nama_barang }}</p>
                        </td>
                        <td>
                            <p>{{ $barang->merk->nama_merk }}</p>
                        </td>
                        <td class="text-end">
                            <a href="{{ route('barang.show', $barang->id) }}" class="badge badge-success">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('barang.edit', $barang->id) }}" class="badge badge-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda yakin akan menghapus {{ $barang->nama_barang }}?')" class="badge badge-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
