@extends('layouts.app')
@section('content')
    @push('head')
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/vuexy/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/vuexy/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/vuexy/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/vuexy/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/vuexy/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    <div class="content-wrapper container-xxl p-0">
        {{-- content header --}}
        <div class="content-header row">

            {{-- header left --}}
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Data Tambah Makanan</h2>
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
                            <div class="card-header">
                                <h3>Form Tambah</h3>
                            </div>
                            <div class="card-body py-2">
                                <form action="/makanan/proses/tambah" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control @error('nama') error @enderror" id="nama"
                                            placeholder="Isi nama">
                                            @error('nama')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="@error('image') error @enderror" id="createThumbnail" name="image" data-max-file-size="3M" data-allowed-file-extensions="jpg jpeg png" />
                                            @error('image')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" name="harga" class="form-control @error('harga') error @enderror" id="harga"
                                            placeholder="Isi Harga">
                                            @error('harga')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok</label>
                                        <input type="number" name="stok" class="form-control @error('stok') error @enderror" id="stok"
                                            placeholder="Isi Stok">
                                            @error('stok')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsicreate">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" id="deskripsicreate" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_kategori">Kategori</label>
                                        <select name="id_kategori" class="form-control @error('name') error @enderror" id="id_kategori" required>
                                            @foreach ($kategori as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('stok')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Basic table -->
        </div>
        {{-- content body --}}

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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
                var drEvent = $('#createThumbnail').dropify();
                drEvent = drEvent.data('dropify');
            </script>
        @endpush
    </div>
@endsection
