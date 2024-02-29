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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    @include('templates.aulinha.inc.stylesheets')
</head>

<body>
    <!-- header area -->
    @include('templates.aulinha.inc.header')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Learning Today,<br>Leading Tomorrow</h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <a href="courses.html" class="btn-get-started">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        @yield('content')
    </main>

    @include('templates.aulinha.inc.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- scripts javascript -->
    @include('templates.aulinha.inc.scripts')
</body>

</html>