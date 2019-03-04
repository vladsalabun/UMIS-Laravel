<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ukrainian vocabulary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/body.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/umis.css') }}" rel="stylesheet">
    <link href="{{ asset('css/heart.css') }}" rel="stylesheet">
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab" rel="stylesheet">
</head>
<body>
    @include('pages.pageParts.preloader')
<div id="fullpage">
    @include('pages.pageParts.navbar')
    @yield('content')
    @include('pages.pageParts.footer')
</div>
</body>
</html>
