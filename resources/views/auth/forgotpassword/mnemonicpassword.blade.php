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
                                <form method="POST" action="/forgotpassword/mnemonic">
                                {{ csrf_field() }}
                                <div class="card-body p-4 text-center">
                                    <h2 class="d-inline">Reset Password<span
                                            class="badge bg-secondary ms-3">MNEMONIC</span></h2>
                                </div>
                                
                                <div class="mb-3 text-center">
                                    
                                    <label class="form-label fs-18">Please enter your username and mnemonic, your
                                        password</label>
                                    <div class="mnemonic-inputs p-3">
                                        <input type="text" class="form-control mt-2" placeholder="Username" name="username">
                                        @if($errors->has('username'))
                                            <p class="text-danger">{{$errors->first('username')}}</p>
                                        @endif
                                        <input type="text" class="form-control mt-2" placeholder="Mnemonic" name="mnemonic" id="mnemonic">
                                        @if($errors->has('mnemonic'))
                                            <p class="text-danger">{{$errors->first('mnemonic')}}</p>
                                        @endif
                                        <div class="mnemonic-pwd">
                                            <div class="w-50 pe-2 float-start">
                                                <input type="password" class="form-control mt-2" placeholder="Password" name="password"
                                   id="password">
                                            </div>
                                            <div class="w-50 ps-2 float-end">
                                                <input type="password" class="form-control mt-2 float-end"
                                                    placeholder="Confirm Password" name="password_confirmation" id="password_confirm">
                                            </div>
                                        </div>
                                    </div>
                                    @if($errors->has('password'))
                                    <p class="text-danger">{{$errors->first('password')}}</p>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-4">
                                    <div class="text-center">
                                        <input type="submit"
                                            class="btn btn-secondary btn-animation waves-effect waves-light px-5"
                                            value="Send">                                        
                                    </div>
                                </div>
                                </form>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="mt-4 text-center">
                                <p class="mb-0">Don't want to change password? <a href="{{route('auth.signin')}}"
                                        class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
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

    <!-- Swiper slider js -->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- ecommerce product details init -->
    <script src="{{ asset('assets/js/pages/ecommerce-product-details.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>