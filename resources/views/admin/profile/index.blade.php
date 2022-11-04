@extends('admin.app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <div class="form-group mb-4">
                <label class="text-label">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <p  class="form-control" id="val-username1" style="color:black">{{ $data->name }}</p>
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="text-label">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <p class="form-control" id="email" style="color:black">{{ $data->email }}</p>
            </div>

            <div class="form-group mb-4 mt-4">
                <label for="text-label">Role</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="bi bi-person-rolodex"></i> </span>
                    </div>
                    <p class="form-control" id="email" style="color:black">{{ $data->role }}</p>

            </div>

                <div class="form-group">
                    <a  class="btn btn-primary mr-2 my-4 px-4" href="{{ route('profile.edit') }}">Edit</a>
                    <a href="/dashboard" class="btn btn-light px-4">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
