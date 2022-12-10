@extends('app')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form class="form-valide-with-icon">
                <div class="form-group mb-4">
                    <label class="text-label">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <p  class="form-control" id="val-username1" style="color:black">{{ $basicuser->name }}</p>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="text-label">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <p class="form-control" id="email" style="color:black">{{ $basicuser->email }}</p>

                </div>

                <div class="form-group mb-4 mt-4">
                    <label for="text-label">Role</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="bi bi-person-rolodex"></i> </span>
                        </div>
                        <p class="form-control" id="email" style="color:black">{{ $basicuser->role }}</p>

                </div>

                <div class="form-group mt-4">
                    <a href="/basicuser" class="btn mr-2 px-4 btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

