<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>تسجيل الدخول</title>
    <link rel="apple-touch-icon" href="{{asset('public/dashboard/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/dashboard/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/vendors/vendors-rtl.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/components.css')}}">


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard')}}/css/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard')}}/css/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/rtl/style-rtl.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="{{asset('public/dashboard/images/pages/login.png')}}" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            @include('dashboard.layouts.inc.alert.success')
                                            {{-- @include('dashboard.layouts.inc.alerts..errors') --}}
                                            <div class="card-title">
                                                <h4 class="mb-0">تسجيل الدخول </h4>
                                            </div>
                                        </div>
                                        <p class="px-2">مرحبا ,من فضلك سجل دخولك</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form action="{{ route('admin.login') }}" method="POST">
                                                    @csrf
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input name="username" type="text" class="form-control"  placeholder="اسم المستخدم">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="user-name">اسم المستخدم</label>
                                                        @error('username')
                                                        <span class=" text-danger">{{$message}}</span>
                                                        @enderror
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input name="password" type="password" class="form-control" id="user-password" placeholder="كلمه المرور" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">كلمة المرور</label>
                                                        @error('password')
                                                        <span class=" text-danger">{{$message}}</span>
                                                        @enderror
                                                    </fieldset>

                                                    <button type="submit" class="btn btn-primary float-right btn-inline">دخول</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('public/dashboard/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('public/dashboard/js/app-menu.js')}}"></script>
    <script src="{{asset('public/dashboard/js/app.js')}}"></script>
    <script src="{{asset('public/dashboard/js/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
