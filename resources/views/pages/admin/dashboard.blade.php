@extends('layouts.app')
@section('content')
<div class="content-wrapper container-xxl p-0">
    {{-- content header --}}
    <div class="content-header row">

        {{-- header left --}}
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                Home
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- header left --}}

        {{-- header right --}}
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            {{-- text right --}}
        </div>
        {{-- header right --}}

    </div>
    {{-- content header --}}

    {{-- content body --}}
    <div class="content-body">
        <!-- Basic table -->
        <section>
            <div class="row">
                <div class="col-12">
        
                    <!-- Statistics Card -->
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">Statistics</h4>
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-light-primary mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="life-buoy" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">5</h4>
                                            <p class="card-text font-small-3 mb-0">makanan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-light-info mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="user" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">8</h4>
                                            <p class="card-text font-small-3 mb-0">User</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                    <div class="media">
                                        <div class="avatar bg-light-danger mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="credit-card" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">10</h4>
                                            <p class="card-text font-small-3 mb-0">Transaksi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="media">
                                        <div class="avatar bg-light-success mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="image" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">3</h4>
                                            <p class="card-text font-small-3 mb-0">Slider</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->

                </div>
            </div>
        </section>
        <!--/ Basic table -->
    </div>
    {{-- content body --}}
</div>
@endsection