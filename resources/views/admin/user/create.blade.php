@extends('admin.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tambah User</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="form-valide-with-icon" method="POST" action="{{ route('user.store') }}" novalidate="">
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
                <div class="form-group">
                    <label class="text-label">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" class="form-control" id="val-username1" name="name" required="" placeholder="Enter a username..">
                    </div>
                </div>

                <div class="form-group">
                    <label for="text-label">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="email" name="email" required="" placeholder="email" required="">
                        <div class="invalid-feedback d-block">
                            Your email is required.
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label">Password *</label>
                    <div class="input-group transparent-append">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="password" class="form-control" id="dz-password" name="password" required="" placeholder="Choose a safe one..">
                        <div class="input-group-append show-pass ">
                            <span class="input-group-text ">
                                <i class="fa fa-eye-slash"></i>
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                </div>
                <button type="submit" class="btn mr-2 btn-primary">Submit</button>
                <button type="submit" class="btn btn-light">cencel</button>
            </form>
        </div>
    </div>
</div>
@endsection
