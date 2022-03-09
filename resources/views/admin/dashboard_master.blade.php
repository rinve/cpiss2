<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ config('app.name') }}-Dashboard</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/images/favicon.ico') }}">
        <link href="{{ asset('admin/dashboard/css/font-face.css') }}" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('website/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('website/font-awesome/css/fontawesome.min.css') }}">
        <link href="{{ asset('admin/dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css') }}"
            rel="stylesheet" media="all">
        <link href="{{ asset('admin/dashboard/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('admin/dashboard/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('admin/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}"
            rel="stylesheet" media="all">
        <link href="{{ asset('admin/dashboard/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('admin/dashboard/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet"
            media="all">
        <link href="{{ asset('admin/dashboard/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('admin/dashboard/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('admin/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet"
            media="all">
        <link href="{{ asset('admin/dashboard/css/style.css') }}" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            @include('admin.header.mobile_header')
            @include('admin.sidebar.index')
            <div class="page-container">
                @include('admin.header.desktop_header')
                <div class="main-content">
                    @yield('dashboard')
                </div>
                @include ('admin.footer.index')
            </div>
        </div>



        <script src="{{ asset('admin/dashboard/vendor/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('admin/dashboard/vendor/bootstrap-4.1/popper.min.js') }}"></script>
        <script src="{{ asset('admin/dashboard/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/dashboard/vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('admin/dashboard/vendor/wow/wow.min.js') }}"></script>
        <script src="{{ asset('admin/dashboard/vendor/animsition/animsition.min.js') }}"></script>
        <script src="{{ asset('admin/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <script src="{{ asset('admin/dashboard/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
        </script>
        <script src="{{ asset('admin/dashboard/vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('admin/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('admin/dashboard/vendor/chartjs/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/dashboard/vendor/select2/select2.min.js') }}"></script>
        <script src="{{ asset('admin/dashboard/js/custom.js') }}"></script>

    </body>

</html>
