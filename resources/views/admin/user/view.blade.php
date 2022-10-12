@extends('admin.app')

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="form-valide-with-icon" method="POST" action="{{ route('user.show',  $user->id) }}" novalidate="">
                <div class="form-group mb-4">
                    <label class="text-label">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <a  class="form-control" id="val-username1" style="color:black">{{ $user->name }}</a>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="text-label">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <a class="form-control" id="email" style="color:black">{{ $user->email }}</a>

                </div>

                <div class="form-group mb-4 mt-4">
                    <label for="text-label">Role</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="bi bi-person-rolodex"></i> </span>
                        </div>
                        <a class="form-control" id="email" style="color:black">{{ $user->role }}</a>

                </div>

                <div class="form-group mt-4">
                    <a href="/user" class="btn mr-2 px-4 btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
