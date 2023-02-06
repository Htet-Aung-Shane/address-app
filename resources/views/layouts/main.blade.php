<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DPS's Address Search</title>
    <!-- Favicons -->
    <link href="{{ URL::to('/') }}/images/favicon.png" rel="icon">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <script>
        function feedback() {
            window.location.href = "/feedback";
        }
        function business() {
            window.location.href = "https://dpsmap.com/businesslist/";
        }
    </script>
</head>

<body>
    @extends('layouts.svg')
    <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ URL::to('/') }}/images/logo.png" class="d-inline-block align-text-top">
            </a>

            <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary btn-lg" onclick="business()">Business List !</button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-outline-light btn-lg" onclick="feedback()">Give Feedback!</button>
            </div>
        </div>

    </nav>

    <div class="container">
        @yield('content')


        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="text-muted" id='copyright'>© 2022 DPS Map</span>
                <span class="text-muted" id='developed_by'> |Developed By HAS</span>
            </div>
            <style>


            </style>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>
    </div>
</body>

</html>
