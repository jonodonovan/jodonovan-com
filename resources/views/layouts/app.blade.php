<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @if (App::environment('production') && Request::segment(1) != "home" && Request::segment(1) != "projects" )
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-10717073-8"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-10717073-8');
        </script>
    @endif

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="/images/theme/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/theme/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/theme/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/theme/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/theme/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/theme/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/theme/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/theme/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/theme/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/theme/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/theme/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/theme/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/theme/favicon-16x16.png">
    <link rel="manifest" href="/images/theme/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/theme/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')

    <title>@yield('title', 'Jon ODonovan')</title>

    @yield('style')

    @yield('script_header')

</head>
<body style="@yield('body_style')">
    @include('partials/navbar')

    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('script_footer')

    @if (session('status'))
        <script type="text/javascript">
            $(".alert-success").alert();
            window.setTimeout(function() { $(".alert-success").alert('close'); }, 5000);
        </script>
    @endif

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</body>
</html>
