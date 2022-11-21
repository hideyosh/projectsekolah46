@extends('admin.app')
@section('content')
<div class="container-fluid">
    <div class="header-left mb-4">
        <div class="dashboard_bar">
            <h1>{{ $title }}</h1>
            <div class="row">
                <div class="col-xl-9 col-xxl-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <span class="mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="53" fill="bg-primary" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                            </svg>
                                        </span>
                                        <div class="media-body ml-1">
                                            <p class="mb-2">User</p>
                                            <h3 class="mb-0 text-black font-w600">{{ $admins }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <span class="mr-4">
                                            <svg width="51" height="31" viewBox="0 0 51 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M49.3228 0.840214C50.7496 2.08096 50.9005 4.24349 49.6597 5.67035L34.6786 22.8987C32.284 25.6525 28.1505 26.0444 25.281 23.7898L19.529 19.2704C18.751 18.6591 17.6431 18.7086 16.9226 19.3866L5.77023 29.883C4.3933 31.1789 2.22651 31.1133 0.930578 29.7363C-0.365358 28.3594 -0.299697 26.1926 1.07723 24.8967L13.4828 13.2209C15.9494 10.8993 19.7428 10.7301 22.4063 12.8229L28.0152 17.2299C28.8533 17.8884 30.0607 17.774 30.7601 16.9696L44.4926 1.1772C45.7334 -0.249661 47.8959 -0.400534 49.3228 0.840214Z" fill="#FE634E"></path>
                                            </svg>
                                        </span>
                                        <div class="media-body ml-1">
                                            <p class="mb-2">Customer</p>
                                            <h3 class="mb-0 text-black font-w600">{{ $users }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <span class="mr-4">
                                            <svg width="51" height="52" viewBox="0 0 51 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.5 43C34.8888 43 42.5 35.3888 42.5 26C42.5 16.6112 34.8888 9 25.5 9C16.1112 9 8.5 16.6112 8.5 26C8.5 35.3888 16.1112 43 25.5 43ZM25.5 51.5C39.5833 51.5 51 40.0833 51 26C51 11.9167 39.5833 0.5 25.5 0.5C11.4167 0.5 0 11.9167 0 26C0 40.0833 11.4167 51.5 25.5 51.5Z" fill="white" fill-opacity="0.18"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M33.9997 1.95836C31.9058 1.21807 29.72 0.75304 27.4976 0.578384C26.3965 0.491843 25.4997 1.39543 25.4997 2.5V6.86605C25.4997 7.97062 26.3981 8.854 27.4951 8.98264C29.8644 9.26046 32.1572 10.031 34.223 11.253C36.8645 12.8155 39.0379 15.0589 40.5159 17.7486C41.9939 20.4384 42.7223 23.4757 42.625 26.5433C42.5277 29.6108 41.6082 32.5959 39.9627 35.1866C38.3172 37.7772 36.006 39.8783 33.2707 41.2703C30.5355 42.6623 27.4766 43.294 24.4136 43.0995C21.3507 42.905 18.3963 41.8913 15.8591 40.1645C13.8749 38.814 12.2029 37.0662 10.9444 35.0397C10.3616 34.1013 9.1801 33.6636 8.18029 34.1331L4.2283 35.989C3.22848 36.4585 2.79178 37.6543 3.33818 38.6143C4.44093 40.5516 5.79093 42.3324 7.35106 43.9131C8.50759 45.0848 9.77958 46.1466 11.1519 47.0806C14.9279 49.6506 19.3249 51.1592 23.8834 51.4487C28.4418 51.7382 32.9943 50.798 37.0652 48.7264C41.136 46.6548 44.5756 43.5277 47.0246 39.6721C49.4736 35.8165 50.842 31.3739 50.9868 26.8085C51.1317 22.2432 50.0476 17.7228 47.8479 13.7197C45.6482 9.71663 42.4137 6.37787 38.4824 4.05236C37.0536 3.2072 35.5519 2.50715 33.9997 1.95836Z" fill="#FE634E"></path>
                                            </svg>
                                        </span>
                                        <div class="media-body ml-1">
                                            <p class="mb-2">Barang</p>
                                            <div class="d-flex align-items-center">
                                                <h3 class="mb-0 mr-3 text-black font-w600">5{{ $barangs }}</h3>
                                                <svg width="29" height="15" viewBox="0 0 29 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 15L14.5 -1.27353e-06L29 15" fill="#21B830"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
