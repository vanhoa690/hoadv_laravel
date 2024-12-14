<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href={{ asset('assets/img/kaiadmin/favicon.ico') }} type="image/x-icon" />
    <!-- CSS Files -->
    <link rel="stylesheet" href={{ asset('assets/css/fonts.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/plugins.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/kaiadmin.min.css') }} />
    <!-- Fonts and icons -->
    <script src={{ asset('assets/js/plugin/webfont/webfont.min.js') }}></script>
</head>

<body>
    <div class="wrapper">
        <x-sidebar />
        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <x-header.logo />
                </div>
                <x-header.navbar />
            </div>

            <div class="container">
                {{ $slot }}
            </div>
            <x-footer />
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src={{ asset('assets/js/core/jquery-3.7.1.min.js') }}></script>
    <script src={{ asset('assets/js/core/popper.min.js') }}></script>
    <script src={{ asset('assets/js/core/bootstrap.min.js') }}></script>

    <!-- jQuery Scrollbar -->
    <script src={{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}></script>

    <!-- Chart JS -->
    {{-- <script src={{ asset('assets/js/plugin/chart.js/chart.min.js') }}></script> --}}

    <!-- jQuery Sparkline -->
    <script src={{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}></script>

    <!-- Chart Circle -->
    <script src={{ asset('assets/js/plugin/chart-circle/circles.min.js') }}></script>

    <!-- Datatables -->
    <script src={{ asset('assets/js/plugin/datatables/datatables.min.js') }}></script>

    <!-- Bootstrap Notify -->
    <script src={{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}></script>

    <!-- jQuery Vector Maps -->
    <script src={{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}></script>
    <script src={{ asset('assets/js/plugin/jsvectormap/world.js') }}></script>

    <!-- Sweet Alert -->
    <script src={{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}></script>

    <!-- Kaiadmin JS -->
    {{-- <script src={{ asset('assets/js/kaiadmin.min.js') }}></script> --}}
</body>

</html>
