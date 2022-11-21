<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Dashboard</title>
    @include('components.dashboard.styles')
    @yield('styles')
    
</head>
<body>

<div class="loader-wrapper">
    <div class="theme-loader">
        <div class="loader-p"></div>
    </div>
</div>

<div class="page-wrapper compact-wrapper" id="pageWrapper">

    @include('components.dashboard.header')

    <div class="page-body-wrapper sidebar-icon">

        @include('components.dashboard.sidebar')

        <div class="page-body">
            <!-- Container-fluid starts-->
            <div class="container-fluid dashboard-default-sec">
                @yield('content')
            </div>
            <!-- Container-fluid Ends-->
        </div>

        @include('components.dashboard.footer')
    </div>
</div>
@include('components.dashboard.scripts')
@yield('scripts')
</body>
</html>