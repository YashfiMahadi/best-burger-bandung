@extends('layouts.app')
@section('content')

@push('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endpush

<div class="content-wrapper container-xxl p-0">
    {{-- content header --}}
    <div class="content-header row">

        {{-- header left --}}
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Data Table Users</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                Users
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
                        <div class="card-header border-bottom">
                            <div class="col-md-12 p-0 text-right">
                                <a href="javascript:void(0)" id="create" class="btn btn-success">
                                    Tambah data
                                </a>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <table id="table" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Basic table -->
    </div>
    {{-- content body --}}
    @include('includes.modal.user.create')
    @include('includes.modal.user.edit')

    @push('script')
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    @include($js)
    @endpush
</div>
@endsection