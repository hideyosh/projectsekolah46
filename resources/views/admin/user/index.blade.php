@extends('admin.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <a class="btn btn-rounded btn-outline-primary w-25 ms-4" href="{{ route('user.create') }}">Create Admin</a>
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
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            <p>{{ $user->name }}</p>
                        </td>
                        <td>
                            <p>{{ $user->email }}</p>
                        </td>
                        <td class="text-end">
                            <a href="{{ route('user.show', $user->id) }}" class="badge badge-success">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('user.edit', $user->id) }}" class="badge badge-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda yakin akan menghapus {{ $user->name }}?')" class="badge badge-danger">
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
