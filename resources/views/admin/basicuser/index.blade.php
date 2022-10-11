@extends('admin.app')

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    {{-- <a class="btn btn-rounded btn-outline-primary w-25 ms-4 mt-3" href="{{ route('basicuser.create') }}">Create User</a> --}}
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($basicusers as $basicuser)
                    <tr>
                        <td>
                            <p>{{ $basicuser->name }}</p>
                        </td>
                        <td>
                            <p>{{ $basicuser->email }}</p>
                        </td>
                        <td class="text-end">
                            <a href="{{ route('basicuser.show', $basicuser->id) }}" class="badge badge-success">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('basicuser.edit', $basicuser->id) }}" class="badge badge-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('basicuser.destroy', $basicuser->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda yakin akan menghapus {{ $basicuser->name }}?')" class="badge badge-danger">
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
