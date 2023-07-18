<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>Product Details | Velzon - Admin & Dashboard Template</title>
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

                <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h2>Mnemonic</h2>


            <div class="mt-3">
                <div class="form-group">
                    <p>
                        This is your mnemonik key. It consists out of {{config('marketplace.mnemonic_length')}} words.
                        Please write
                        them down. This is the only time they will be shown to you, and without them you cannot recover
                        your account
                        in case you lose password.
                    </p>
                </div>
                <div class="form-group">
                    <textarea name="" id="" cols="30" rows="10" readonly class="form-control">{{$mnemonic}}</textarea>
                </div>
                <br>
                <div class="form-group text-center">
                    <a href="{{route('auth.signin')}}" class="btn btn-warning">Proceed to Sign In</a>
                </div>
            </div>

        </div>
    </div>
                    <!-- end row -->
                </div>

            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- ecommerce product details init -->
    <script src="{{ asset('assets/js/pages/ecommerce-product-details.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>