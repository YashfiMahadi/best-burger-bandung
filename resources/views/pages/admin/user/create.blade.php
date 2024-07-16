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
    @endpush

    <div class="content-wrapper container-xxl p-0">
        {{-- content header --}}
        <div class="content-header row">

            {{-- header left --}}
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Data Tambah Users</h2>
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
                            <div class="card-header">
                                <h3>Form Tambah</h3>
                            </div>
                            <div class="card-body py-2">
                                <form action="/user/proses/tambah" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_lengkap_create">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') error @enderror" id="nama_lengkap_create"
                                            placeholder="Isi Nama lengkap" required>
                                            @error('nama_lengkap')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="namecreate">Username</label>
                                        <input type="text" name="name" class="form-control @error('name') error @enderror" id="namecreate"
                                            placeholder="Isi nama" required>
                                            @error('name')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="notlp">No telepon</label>
                                        <input type="text" name="notlp" class="form-control @error('notlp') error @enderror" id="notlp"
                                            placeholder="08435XXXXXXXX" required>
                                            @error('notlp')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" name="email" class="form-control @error('email') error @enderror" id="email"
                                            placeholder="Isi email" required>
                                            @error('email')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input type="password" name="password" class="form-control @error('password') error @enderror" id="password"
                                            placeholder=".........." required>
                                            @error('password')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Konfirmasi Password</label>
                                        <input type="password" name="password_confirmation" class="form-control @error('password_confirm') error @enderror" id="password_confirm"
                                            placeholder="........." required>
                                            @error('password_confirm')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="role">role</label>
                                        <select name="role" class="form-control" id="role" required>
                                            <option value="admin">admin</option>
                                            <option value="user">user</option>
                                        </select>
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
        @endpush
    </div>
@endsection
