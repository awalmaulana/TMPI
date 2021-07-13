@extends('Layout-Apps.main')

@section('library-css')
    @if ($special_css)
        <link href="{{ asset('custom-assets/css/application/' . $special_css) }}" rel="stylesheet">
    @endif
@endsection

@section('library-js')
    @if ($special_js)
        <script src="{{ asset('custom-assets/js/application/' . $special_js) }}"></script>
    @endif
@endsection


@section('content')

    <!-- BreadTitle -->
    <div class="content-header row">
        {{-- <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Dashboard</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Form Elements</a>
                        </li>
                        <li class="breadcrumb-item active">Input
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
        <div class="mb-1 breadcrumb-right">
            <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
            </div>
        </div>
    </div> --}}
    </div>
    <!-- end BreadTitle -->

    <div class="content-body">
        <!-- Dashboard Starts -->
        <section id="dashboard">
            <div class="row match-height">
                <!-- Statistics Card -->
                <div class="col-xl-12 col-md-6 col-12">
                    <div class="card card-congratulations">
                        <div class="card-body text-center">
                            <img src="{{ asset('app-assets/images/elements/decore-left.png') }}"
                                class="congratulations-img-left" alt="card-img-left" />
                            <img src="{{ asset('app-assets/images/elements/decore-right.png') }}"
                                class="congratulations-img-right" alt="card-img-right" />
                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <img src="{{ asset('app-assets/images/logo/LOGO_BSSN.png') }}" alt="avatar"
                                        height="50" width="50">
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-1 text-white">Selamat Datang <strong>Stakeholder</strong>,</h1>
                                <p class="card-text m-auto w-75">
                                    Di Aplikasi Pengukuran Tingkat Maturitas Penanganan Insiden (TMPI).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Statistics Card -->
            </div>

            <div class="row match-height">
                <!-- Online Card -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Pengisian <strong>ONLINE</strong> TMPI</h4>
                        </div>
                        <div class="card-body border-top">
                            <p class="card-text text-muted my-1">Silakan lakukan pengisian <strong>Instrumen</strong></p>
                            <button type="button" class="btn btn-info">
                                <i data-feather="edit" class="me-25"></i>
                                <span>ISI INSTRUMEN</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--/ Online Card -->

                <!-- Offline Card -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Pengisian <strong>OFFLINE</strong> TMPI</h4>
                        </div>
                        <div class="card-body border-top">
                            <p class="card-text text-muted my-1">Silakan unduh dokumen pengisian <strong>Instrumen</strong>
                            </p>
                            <button type="button" class="btn btn-info">
                                <i data-feather="download" class="me-25"></i>
                                <span>UNDUH INSTRUMEN</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--/ Offline Card -->

            </div>

            <div class="row match-height">
                <!-- Earnings Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-warning">
                                    <i data-feather="info" class="me-25"></i>
                                    <span>Tentang Instrumen Pengukuran</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Earnings Card -->

                <!-- Earnings Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-info">
                                    <i data-feather="info" class="me-25"></i>
                                    <span>Petunjuk Pengisian</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Earnings Card -->

                <!-- Earnings Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-primary">
                                    <i data-feather="info" class="me-25"></i>
                                    <span>Proses Pengukuran</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Earnings Card -->

            </div>

        </section>
        <!-- Dashboard ends -->

    </div>

@endsection
