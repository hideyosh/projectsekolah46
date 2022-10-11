@extends('admin.app')
@section('content')
<div class="container-fluid">
    <div class="header-left mb-4">
        <div class="dashboard_bar">
            <h1>{{ $title }}</h1>
            <div class="container">

                    <div class="widget-stat card bg-primary">
                        <div class="card-body p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-381-user-7"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Chef</p>
                                    <h3 class="text-white">$76</h3>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
