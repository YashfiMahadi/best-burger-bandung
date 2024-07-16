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
                    <h2 class="content-header-title float-left mb-0">Data Table Makanan</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                Makanan
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
                                <a href="/makanan/tambah" class="btn btn-success">
                                    Tambah data
                                </a>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            @if (session()->has('tambah'))
                                <div class="alert bg-success text-white">
                                    {{ session()->get('tambah') }}
                                </div>
                            @endif
                            @if (session()->has('edit'))
                                <div class="alert bg-primary text-white">
                                    {{ session()->get('edit') }}
                                </div>
                            @endif
                            @if (session()->has('hapus'))
                                <div class="alert bg-danger text-white">
                                    {{ session()->get('hapus') }}
                                </div>
                            @endif
                            <table id="table" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>image</th>
                                        <th>Harga</th>
                                        <th>stok</th>
                                        <th>kategori</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($makanan as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>
                                            <img src="{{ asset('images/uploads/' . $item->image)}}" alt="" width="70">
                                        </td>
                                        <td>{{ $item->harga }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>
                                            <a href="/makanan/{{ $item->id }}/show" class="btn btn-info">show</a>
                                            <a href="/makanan/{{ $item->id }}/edit" class="btn btn-primary">edit</a>
                                            <a href="/makanan/{{ $item->id }}/delete" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapusnya?');">hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Basic table -->
    </div>
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
    @endpush
</div>
@endsection