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
                    <div class="card">
                        <div class="card-body py-2">
                            <div class="row">
                                <div class="col-sm-6 col-12 d-flex flex-column flex-wrap text-center">
                                    <h1 class="font-large-2 fw-bolder mt-2 mb-0">{{ $user }}</h1>
                                    <p class="card-text">Jumlah data user</p>
                                </div>
                                <div class="col-sm-6 col-12 d-flex flex-column flex-wrap text-center">
                                    <h1 class="font-large-2 fw-bolder mt-2 mb-0">{{ $laporan }}</h1>
                                    <p class="card-text">jumlah data laporan kerja</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="/user">
                                        <div class="card icon-card cursor-pointer text-center mb-2 mx-50" data-bs-html="true" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-icon="<i data-feather='check'></i>" data-bs-original-title="check" style="display: block;">
                                            <div class="card-body border-primary rounded"> 
                                                <div class="icon-wrapper">
                                                    <i data-feather="user"></i>
                                                </div>
                                                <p class="icon-name text-truncate mb-0 mt-1">Atur data user</p> 
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="/laporankerja">
                                        <div class="card icon-card cursor-pointer text-center mb-2 mx-50" data-bs-html="true" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-icon="<i data-feather='calendar'></i>" data-bs-original-title="calendar" style="display: block;">
                                            <div class="card-body border-primary rounded">
                                                <div class="icon-wrapper">
                                                    <i data-feather='clipboard'></i>
                                                </div>
                                                <p class="icon-name text-truncate mb-0 mt-1">Atur data laporan kerja</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Basic table -->
    </div>
    {{-- content body --}}
</div>
@endsection