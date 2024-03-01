<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Aulinha Online - {{$title_page}}</title>
    <meta content="Site de aulinhas musicais" name="description">
    <meta content="aulas online, aulinha, aulas musicais, musica, aprender instrumentos" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    @include('templates.aulinha.inc.stylesheets')
</head>

<body>
    <!-- header area -->
    @include('templates.aulinha.inc.header')
    
    <!-- main area -->
    <main id="main">
        @yield('content')
    </main>
    
    <!-- footer area -->
    @include('templates.aulinha.inc.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- scripts javascript -->
    @include('templates.aulinha.inc.scripts')
</body>

</html>