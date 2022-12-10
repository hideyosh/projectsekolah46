@extends('app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
        <a class="btn btn-rounded btn-outline-primary w-25 ms-4 mt-3" href="{{ route('merk.create') }}">Create Merk</a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th>Nama Merk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($merks as $merk)
                    <tr>
                        <td>
                            <p>{{ $merk->nama_merk }}</p>
                        </td>
                        <td>
                            <a href="{{ route('merk.show', $merk->id) }}" class="badge badge-success">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('merk.edit', $merk->id) }}" class="badge badge-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('merk.destroy', $merk->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda yakin akan menghapus {{ $merk->nama_merk }}?')" class="badge badge-danger">
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
