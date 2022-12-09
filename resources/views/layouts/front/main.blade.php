<!DOCTYPE html>
<html lang="ru">
<head>
    @include('components.front.meta')
    @yield('meta')
    @include('components.front.styles')
    @yield('styles')
    <title>Murad Buildings</title>
</head>
<body>
<!-- PRELOADER -->

@if (Request::segment(1) == null)
    @include('components.front.preloader')
@endif

<!-- MOBILE MENU -->
@include('components.front.mobile_menu')

<!-- TEL-POPUP -->
@if(\Request::segment(1) != 'career' && \Request::segment(1) != 'about' && \Request::segment(1) != 'news')
@include('components.front.tel_popup')
@endif
<!-- FEEDBACK -->
@if(\Request::segment(1) != 'career' && \Request::segment(1) != 'about' && \Request::segment(1) != 'news')
@include('components.front.feedback')
@endif
<!-- HEADER -->
@include('components.front.header')

<!-- MAIN -->
@yield('content')

<!-- FOOTER -->
@if(\Request::segment(1) != 'about' && \Request::segment(1) != 'career')
    @include('components.front.footer')
@endif

<!-- SCRIPTS -->
@include('components.front.scripts')
@yield('scripts')

</body>
</html>