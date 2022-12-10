@extends('admin.app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="form-valide-with-icon" method="POST" action="{{ route('changepassword.update') }}" novalidate="">
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

                <div class="form-group mb-4">
                    <label class="text-label">Old Password</label>
                    <div class="input-group transparent-append">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="password" class="form-control" id="dz-password" name="oldpassword" required="" placeholder="Choose a safe one..">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="text-label">New Password</label>
                    <div class="input-group transparent-append">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="text" class="form-control" id="dz-password" name="newpassword" required="" placeholder="Choose a safe one..">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="text-label">Confirm New Password</label>
                    <div class="input-group transparent-append">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="text" class="form-control" id="dz-password" name="confirm_password" required="" placeholder="Input the password again!">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn mr-2 px-4 btn-primary">Submit</button>
                    <a href="/dashboard" class="btn btn-light px-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
