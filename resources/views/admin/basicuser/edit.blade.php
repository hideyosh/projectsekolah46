@extends('admin.app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="form-valide-with-icon" method="POST" action="{{ route('basicuser.update',  $basicuser->id) }}" novalidate="">
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
                @method('PUT')
                <div class="form-group mb-4">
                    <label class="text-label">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" class="form-control" id="val-basicusername1" name="name" value="{{ $basicuser->name }}">
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="text-label">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $basicuser->email }}">
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="text-label">Role</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="bi bi-person-rolodex"></i> </span>
                        </div>
                        <div class="dropdown bootstrap-select form-control default-select dropup">
                        <select class="form-control default-select" id="sel1" tabindex="-98" name="role">
                            <option value="admin" @if($basicuser->role == "admin")@endif>Admin</option>
                            <option value="user" @if($basicuser->role == "user")@endif>User</option>
                        </select>
                        </div>
                </div>

                <div class="form-group mb-4 mt-4">
                    <label class="text-label">Password</label>
                    <div class="input-group transparent-append">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="password" class="form-control" id="dz-password"  required="" placeholder="Choose a safe one..">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="text-label">Confirm Password</label>
                    <div class="input-group transparent-append">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="password" class="form-control" id="dz-password" name="password_confirmation" required="" placeholder="Input the password again!">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn mr-2 px-4 btn-primary">Submit</button>
                    <a href="/basicuser" class="btn btn-light px-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
