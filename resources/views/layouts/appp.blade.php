<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Edmin admin is super flexible, powerful, clean &amp; modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Edmin admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>@yield('title', 'App task')</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{asset('assets/images/favicon/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon/favicon.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Font awesome icon css -->
    <link rel="stylesheet" href="{{asset('assets/css/vendors/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendors/@fortawesome/fontawesome-free/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendors/@fortawesome/fontawesome-free/css/brands.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendors/@fortawesome/fontawesome-free/css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendors/@fortawesome/fontawesome-free/css/regular.css')}}">
    <!-- Ico Icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/@icon/icofont/icofont.css')}}">
    <!-- Flag Icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/flag-icon.css')}}">
    <!-- Themify Icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/themify-icons/themify-icons/css/themify.css')}}">
    <!-- Animation css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css/animate.css')}}">
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/weather-icons/css/weather-icons.min.css')}}">
    <!-- Apex Chart css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/apexcharts/dist/apexcharts.css')}}">
    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/simple-datatables/dist/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/scrollbar.css')}}">
    <!-- App css-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
  </head>
  <body>

    @include('partials.taptop')
    @include('partials.loader')
    <main class="page-wrapper compact-wrapper" id="pageWrapper">
    @include('partials.header')
    <div class="page-body-wrapper">
     <!-- Page sidebar start-->
        <div class="overlay"></div>
    @include('partials.aside')
    @yield('content')
     @include('partials.footer')
    </div>
    </main>

<!-- jquery-->
    <script src="{{asset('assets/js/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- bootstrap js-->
    <script src="{{asset('assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Sidebar js-->
    <script src="{{asset('assets/js/sidebar.js')}}"></script>
    <!-- Apexchart js-->
    <script src="{{asset('assets/js/vendors/apexcharts/dist/apexcharts.min.js')}}"></script>
    <!-- Chart js-->
    <script src="{{asset('assets/js/vendors/chart.js/dist/chart.umd.js')}}"></script>
    <!-- Datatable js-->
    <script src="{{asset('assets/js/vendors/simple-datatables/dist/umd/simple-datatables.js')}}"></script>
    <!-- default dashboard js-->
    <script src="{{asset('assets/js/dashboard/default.js')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
    <!-- scrollable-->
    <!-- customizer-->
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- custom script -->
    <script src="{{asset('assets/js/script.js')}}"></script>
  </body>
</html>