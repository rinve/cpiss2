<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Career Path Information & Support System</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/images/favicon.ico') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('website/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('website/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('website/font-awesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('website/css/style.css') }}">
    </head>

    <body>
        @include('website.header.index')
        <div>
            @yield('website')
        </div>
        @include('website.footer.index')
        
        <script src="{{ asset('website/js/jquery/jquery.js') }}" type="text/javascript"></script>
        <script src="{{ asset('website/js/jquery/popper.js') }}" type="text/javascript"></script>
        <script src="{{ asset('website/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('website/js/custom.js') }}" type="text/javascript"></script>
    </body>

</html>
