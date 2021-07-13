<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login - Aplikasi Tingkat Maturitas Penanganan Insiden (TMPI) - BSSN</title>
    <link rel="apple-touch-icon" href="{{asset('login-assets/images/logo/LOGO_BSSN.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('login-assets/images/logo/LOGO_BSSN.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login-assets/css/pages/page-auth.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom-assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
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
                        <!-- Login v1 -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="m-2">
                                    <a href="javascript:void(0);" class="brand-logo mb-1">
                                        <img class="img-fluid" alt="Responsive image" src="{{asset('login-assets/images/logo/LOGO_BSSN.png')}}" height="70px" width="70px">
                                    </a>
    
                                    <div class="text-center">
                                        <h4 class="card-title mb-1" style="font-size: 36px; color: #2A3956">BSSN</h4>
                                        <p class="card-text mb-2">APLIKASI PENGUKURAN TINGKAT MATURITAS PENANGANAN INSIDEN (TMPI)</p>
                                    </div>
    
                                    <form class="auth-login-form mt-2" action="/dashboard" method="GET">
                                        <div class="mb-1">
                                            <label for="login-email" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="login-email" name="login-email" placeholder="Masukkan username" aria-describedby="login-email" tabindex="1" autofocus />
                                        </div>
    
                                        <div class="mb-1">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label" for="login-password">Password</label>
                                            </div>
                                            <div class="input-group input-group-merge form-password-toggle">
                                                <input type="password" class="form-control form-control-merge" id="login-password" name="login-password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Login v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('login-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('login-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <script src="{{asset('login-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('login-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('login-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('login-assets/js/scripts/pages/page-auth-login.js')}}"></script>
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