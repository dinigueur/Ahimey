<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">

    <title>Ahime | dashboard - {{ isset($title) ? $title :' ' }}</title>

    <link rel="apple-touch-icon" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/extensions/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/plugins/tour/tour.css') }}">

    @yield('pageCSS')
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('dashboard/layouts/partials.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('dashboard/layouts/partials.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            @yield('content-header')
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                    @yield('content')
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts/partials.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/extensions/tether.min.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/extensions/shepherd.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->

    <!-- <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script> -->
    @yield('pageJS')
    <!-- END: Page JS-->

    @include('flashy::message')

</body>
<!-- END: Body-->

</html>