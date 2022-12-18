@extends('app')

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>
                            <p>{{ $order->user->name }}</p>
                        </td>
                        <td>
                            <p>{{ $order->pesan }}</p>
                        </td>
                        <td>
                            <a href="{{ route('mail.show', $order->id) }}" class="badge badge-success">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form action="{{ route('mail.destroy', $order->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda yakin akan menghapus pesanan ini?')" class="badge badge-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
