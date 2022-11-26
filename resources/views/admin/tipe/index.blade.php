@extends('admin.app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
        <a class="btn btn-rounded btn-outline-primary w-25 ms-4 mt-3" href="{{ route('tipe.create') }}">Create Tipe</a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th>Nama Tipe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                    <tr>
                        <td>
                            <p>{{ $type->nama_tipe }}</p>
                        </td>
                        <td>
                            <a href="{{ route('tipe.show', $type->id) }}" class="badge badge-success">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('tipe.edit', $type->id) }}" class="badge badge-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('tipe.destroy', $type->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda yakin akan menghapus {{ $type->nama_tipe }}?')" class="badge badge-danger">
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
