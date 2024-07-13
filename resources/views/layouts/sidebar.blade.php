<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">

    {{-- sidebar header --}}
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                    <span class="brand-logo">
                        <img src="{{ asset('images/favicon.png') }}" width="35">
                    </span>
                    <h2 class="brand-text" style="color: #ffbe33">Best Burger</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    {{-- sidebar header --}}

    <div class="shadow-bottom"></div>

    {{-- sidebar content --}}
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ request()->is('admin') ? 'active' : '' }} nav-item">
                <a class="d-flex align-items-center" href="/admin">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span>
                </a>
            </li>
            <li class="navigation-header">
                <span data-i18n="Pages">Akun</span>
                <i data-feather="more-horizontal"></i>
            </li>
            <li class="{{ request()->is('user') ? 'active' : '' }} nav-item">
                <a class="d-flex align-items-center" href="/user">
                    <i data-feather="user"></i>
                    <span class="menu-title text-truncate" data-i18n="User">User</span>
                </a>
            </li>
            <li class="navigation-header">
                <span data-i18n="Pages">menu makanan</span>
                <i data-feather="more-horizontal"></i>
            </li>
            <li class="{{ request()->is('makanan') ? 'active' : '' }} nav-item">
                <a class="d-flex align-items-center" href="/makanan">
                    <i data-feather='life-buoy'></i>
                    <span class="menu-title text-truncate" data-i18n="kategori">Makanan</span>
                </a>
            </li>
            <li class="{{ request()->is('kategori') ? 'active' : '' }} nav-item">
                <a class="d-flex align-items-center" href="/kategori">
                    <i data-feather='grid'></i>
                    <span class="menu-title text-truncate" data-i18n="kategori">Kategori</span>
                </a>
            </li>
            <li class="navigation-header">
                <span data-i18n="Pages">Pembayaran</span>
                <i data-feather="more-horizontal"></i>
            </li>
            <li class="{{ request()->is('transaksi') ? 'active' : '' }} nav-item">
                <a class="d-flex align-items-center" href="/transaksi">
                    <i data-feather='credit-card'></i>
                    <span class="menu-title text-truncate" data-i18n="kategori">Transaksi</span>
                </a>
            </li>
        </ul>
    </div>
    {{-- sidebar content --}}

</div>
