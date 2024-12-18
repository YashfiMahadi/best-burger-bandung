<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Daftar Page - Best Burger Bandung</title>
    <link rel="apple-touch-icon" href="{{ asset('/vuexy/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/vuexy/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/vuexy/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/app-assets/css/pages/page-auth.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " style="background: #212529" data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- daftar v1 -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="brand-logo">
                                    <img src="{{ asset('images/favicon.png') }}" width="35">
                                    <h2 class="brand-text ml-1" style="color: #ffbe33;">Best burger Bandung</h2>
                                </a>

                                @if (session()->has('gagal'))
                                    <div class="alert bg-danger text-white">
                                        {{ session()->get('gagal') }}
                                    </div>
                                @endif

                                <form class="auth-daftar-form mt-2" action="/daftar/proses" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="daftar-nama-lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('nama_lengkap') error @enderror " id="daftar-nama-lengkap" name="nama_lengkap"
                                            placeholder="john legend" aria-describedby="daftar-nama_lengkap" tabindex="1"
                                            autofocus />
                                        @error('nama_lengkap')
                                            <span id="login-email-error" class="error"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="daftar-username" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('name') error @enderror" id="daftar-username" name="name"
                                            placeholder="john" aria-describedby="daftar-username" tabindex="1"
                                            autofocus />
                                        @error('name')
                                            <span id="login-email-error" class="error"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="daftar-notlp" class="form-label">No telelpon</label>
                                        <input type="tel" class="form-control @error('notlp') error @enderror" id="daftar-notlp" name="notlp"
                                            placeholder="0837XXXXXXXX" aria-describedby="daftar-notlp" tabindex="1"
                                            autofocus />
                                        @error('notlp')
                                            <span id="login-email-error" class="error"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="daftar-email" class="form-label">Email</label>
                                        <input type="text" class="form-control @error('email') error @enderror" id="daftar-email" name="email"
                                            placeholder="john@example.com" aria-describedby="daftar-email" tabindex="1"
                                            autofocus />
                                        @error('email')
                                            <span id="login-email-error" class="error"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="daftar-password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="@error('password') error @enderror form-control form-control-merge"
                                                id="daftar-password" name="password" tabindex="2"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="daftar-password" />
                                            <div class="input-group-append @error('password') error @enderror">
                                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                        @error('password')
                                            <span id="login-email-error" class="error"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="daftar-password-confirm">Password Confirm</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="form-control form-control-merge"
                                                id="daftar-password-confirm @error('password_confirmation') error @enderror" name="password_confirmation" tabindex="2"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="daftar-password-confirm" />
                                            <div class="input-group-append @error('password_confirmation') error @enderror">
                                                <span class="input-group-text cursor-pointer"><i
                                                        data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                        @error('password_confirmation')
                                            <span id="login-email-error" class="error"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="daftar-alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="daftar-alamat" name="alamat"
                                            placeholder="jl Sersan sodik ....." aria-describedby="daftar-alamat" tabindex="1"
                                            autofocus ></textarea>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="remember-me"
                                                tabindex="3" />
                                            <label class="custom-control-label" for="remember-me"> Remember Me
                                            </label>
                                        </div>
                                    </div>

                                    <button class="btn btn-block text-white" style="background: #ffbe33" tabindex="4">Daftar</button>
                                </form>

                                <p class="text-center mt-2">
                                    <span>Belum punya akun?</span>
                                    <a href="/login">
                                        <span>Masuk</span>
                                    </a>
                                </p>

                                <div class="divider my-2">
                                    <div class="divider-text">or</div>
                                </div>

                                <p class="text-center mt-2">
                                    <a href="/">
                                        <span>Kembali ke Home</span>
                                    </a>
                                </p>

                            </div>
                        </div>
                        <!-- /daftar v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/vuexy/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('/vuexy/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/vuexy/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('/vuexy/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/vuexy/app-assets/js/scripts/pages/page-auth-daftar.js') }}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
