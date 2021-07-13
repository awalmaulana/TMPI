<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl"
        role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href="/dashboard">
                        <img src="{{ asset('app-assets/images/logo/LOGO_BSSN_2.png') }}" alt="avatar" height="25"
                            width="180">
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item {{ $menu == 'dashboard' ? 'active' : '' }}"><a
                        class="nav-link d-flex align-items-center" href="/dashboard"><i data-feather="home"></i><span
                            class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a></li>
                <li class="nav-item {{ $menu == 'assesment' ? 'active' : '' }}"><a
                        class="nav-link d-flex align-items-center" href="/assesment"><i
                            data-feather='file-plus'></i><span class="menu-title text-truncate"
                            data-i18n="Assesment">Assesment</span></a></li>
                <li class="nav-item {{ $menu == 'riwayat-pengisian' ? 'active' : '' }}"><a
                        class="nav-link d-flex align-items-center" href="/dashboard"><i data-feather='clock'></i><span
                            class="menu-title text-truncate" data-i18n="Riwayat Pengisian">Riwayat Pengisian</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
