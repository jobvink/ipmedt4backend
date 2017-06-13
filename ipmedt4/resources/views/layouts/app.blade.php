<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
<body>
    @include('includes.nav')
    <div class="container-fluid" style="background: white">
        @yield('content')
    </div>

    <!-- Scripts -->
    @include('includes.footer')
    @yield('footerscripts')
    <script src="{{ assets('js/app.js') }}"></script>
</body>
</html>
