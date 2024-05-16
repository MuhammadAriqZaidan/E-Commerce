<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- style -->
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>
<body>
    <!-- navbar -->

    @include('includes.navbar')


    <!-- page content -->

    @yield('content')

    <!-- footer -->

    @include('includes.navbar')

    <!-- bootstrap core javaScript -->

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

    <script src="/script/navbar-scroll.js"></script>
</body>
</html>
