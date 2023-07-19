<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Swiper slider css -->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom Css -->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">


    @include('master.navbar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-8 col-xl-6">
                            <div class="card mt-4">
                                <div class="card-body p-4 text-center">
                                    <h2 class="">Forget your password</h2>
                                </div>
                                <div class="card-body p-4 text-center">
                                    <p class="fs-18">Please choose how to recover it</p>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6 text-center">
                                        <form method="GET" action="/forgotpassword/pgp">
                                            <input type="submit"
                                                class="btn btn-secondary btn-animation waves-effect waves-light w-50"
                                                value="PGP">                                                                                            
                                        </form>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <form method="GET" action="/forgotpassowrd/nemonic">
                                            <input type="submit"
                                                class="btn btn-secondary btn-animation waves-effect waves-light w-50"
                                                value="MNENMONIC">                                        
                                        </form>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end card -->
                            <div class="mt-4 text-center">
                                <p class="mb-0">
                                    Don't want to change password? 
                                    <a href="14-oe-login.html" class="fw-semibold text-primary text-decoration-underline">
                                        Signin
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end page-content -->
        </div>
        <!-- end main-content -->


    </div>
    <!-- END layout-wrapper -->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- Swiper slider js -->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- ecommerce product details init -->
    <script src="{{ asset('assets/js/pages/ecommerce-product-details.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>