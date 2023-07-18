<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>Sign Up</title>
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
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">

                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Create New Account</h5>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form class="needs-validation" action="{{route('auth.signup.post')}}" method="POST">
                                        @csrf
                                       
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="username" class="form-control" id="username"
                                                    placeholder="Enter username" name="username">
                                                <div class="invalid-feedback">
                                                    Please enter username
                                                </div>
                                                @if($errors->has('username'))
                                                    <p class="text-danger">{{$errors->first('username')}}</p>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password <span
                                                        class="text-danger">*</span></label>
                                                <input type="password" name="password" class="form-control" id="userpassword" 
                                                    placeholder="Enter password">
                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>
                                               
                                            </div>
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Confirm Password <span
                                                        class="text-danger">*</span></label>
                                                <input type="password" name="password_confirmation" class="form-control" id="confirmpassword"
                                                    placeholder="Confirm password" >
                                                <div class="invalid-feedback">
                                                    Confirm password
                                                </div>
                                                @if($errors->has('password'))
                                                    <p class="text-danger">{{$errors->first('password')}}</p>
                                                @endif
                                            </div>
                                        
                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="mt-4 text-center">
                                <p class="mb-0">Already have an account ? <a href="{{route('auth.signin')}}"
                                        class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
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

    <!-- Swiper slider js -->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- ecommerce product details init -->
    <script src="{{ asset('assets/js/pages/ecommerce-product-details.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>