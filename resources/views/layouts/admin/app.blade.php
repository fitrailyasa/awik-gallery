<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? '' }} {{ config('app.name', 'Awik Gallery') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;400i;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.2.7/sweetalert2.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/css/OverlayScrollbars.min.css">
    <script src="https://kit.fontawesome.com/2a99f4df77.js" crossorigin="anonymous"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        thead,
        .main-header,
        .main-sidebar {
            background-color: rgb(228, 71, 102);
            background-image: linear-gradient(135deg, rgb(223, 62, 100) 0%, rgb(228, 70, 112) 50%);
            color: white;
        }

        .aktif {
            background-color: rgb(243, 95, 122);
        }

        /* Chart Container Styles */
        .chart-container {
            position: relative;
            height: 250px;
            width: 100%;
        }
    </style>

    <!--Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <style>
        .btn-primary {
            background-color: rgb(0, 0, 66);
        }

        .btn-primary:hover {
            background-color: rgb(14, 14, 125);
        }

        .btn-primary:active {
            background-color: rgb(14, 14, 125);
        }

        .btn-info {
            background-color: rgb(30, 30, 244);
        }

        .btn-info:hover {
            background-color: rgb(13, 13, 160);
        }

        .btn-info:active {
            background-color: rgb(13, 13, 160);
        }
    </style>

    {{ $style ?? '' }}

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        @include('layouts.admin.navbar')
        @include('layouts.admin.sidebar')

        <div class="content-wrapper mt-5 py-3">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="">{{ $title ?? '' }}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{ $title ?? '' }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    {{ $slot ?? '' }}
                    @yield('content')
                </div>
            </section>
        </div>

        @include('layouts.admin.footer')

    </div>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.2.7/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/js/jquery.overlayScrollbars.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    </script>

    {{ $script ?? '' }}

</body>

</html>
