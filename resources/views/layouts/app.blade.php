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

    @yield('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Jon ODonovan')</title>

    <!-- Styles -->
    <style media="screen">
        body{color:#202020}@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);.user{width:200px;height:200px;border-radius:50%;background-repeat:no-repeat;background-position:50%;background-size:cover;background-image:url("/images/JonODonovan-2.png");display:block}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}h1{font-size:2em;margin:.67em 0}img{border:0}button,input,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}textarea{overflow:auto}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:Lato,sans-serif;font-size:14px;line-height:1.6;color:#636b6f;background-color:#fff}button,input,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#3097d1;text-decoration:none}img{vertical-align:middle}h1,h2,h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1,h2,h3{margin-top:22px;margin-bottom:11px}h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}.lead{margin-bottom:22px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}.text-center{text-align:center}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.container:after,.container:before{content:" ";display:table}.container:after{clear:both}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-md-4,.col-md-8,.col-md-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}@media (min-width:992px){.col-md-4,.col-md-8,.col-md-12{float:left}.col-md-4{width:33.33333333%}.col-md-8{width:66.66666667%}.col-md-12{width:100%}.col-md-offset-2{margin-left:16.66666667%}}.form-control{display:block;font-size:14px;line-height:1.6;color:#555}.form-control{width:100%;height:36px;padding:6px 12px;background-color:#fff;background-image:none;border:1px solid #ccd0d2;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.form-control::-moz-placeholder{color:#b1b7ba;opacity:1}.form-control:-ms-input-placeholder{color:#b1b7ba}.form-control::-webkit-input-placeholder{color:#b1b7ba}.form-control::-ms-expand{border:0;background-color:transparent}textarea.form-control{height:auto}.form-group{margin-bottom:15px}.btn{display:inline-block;margin-bottom:0;font-weight:400;text-align:center;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;background-image:none;border:1px solid transparent;white-space:nowrap;padding:6px 12px;font-size:14px;line-height:1.6;border-radius:4px}.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;background-color:#eee}.jumbotron{color:inherit}.container .jumbotron{border-radius:6px;padding-left:15px;padding-right:15px}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron{padding-left:60px;padding-right:60px}}@-ms-viewport{width:device-width}.form-control{border:none}.lead a{text-decoration:underline}
    </style>

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
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">

</body>
</html>
