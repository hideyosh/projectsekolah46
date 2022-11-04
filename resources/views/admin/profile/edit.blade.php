@extends('admin.app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <form class="form-valide-with-icon" method="POST" action="{{ route('profile.update') }}" novalidate="">
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
        <div class="card-body">
            <div class="basic-form">
                    <div class="form-group mb-4">
                        <label class="text-label">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input type="text" class="form-control" id="val-username1" name="name" value="{{ $data->name }}">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="text-label">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn mr-2 px-4 my-4 btn-primary">Submit</button>
                        <a href="/profile" class="btn btn-light px-4">Back</a>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
