<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{route('home')}}"><span>Aulinha</span> online</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        @if ($active == 'home')
            <li class="active">
        @else
            <li>
        @endif
            <a href="{{route('home')}}">Início</a></li>
        @if ($active == 'about')
            <li class="active">
        @else
            <li>
        @endif
            <a href="{{route('about')}}">Sobre</a></li>
        @if ($active == 'donate')
            <li class="active">
        @else
            <li>
        @endif
            <a href="{{route('donate')}}">Apoie</a></li>
        @if ($active == 'courses')
            <li class="active">
        @else
            <li>
        @endif
            <a href="{{route('courses')}}">Cursos</a></li>
          <!--
        @if ($active == 'trainers')
            <li class="active">
        @else
            <li>
        @endif <li>
            <a href="trainers.html">Trainers</a></li> -->
          <!--
        @if ($active == 'events')
            <li class="active">
        @else
            <li>
        @endif <li>
            <a href="events.html">Eventos</a></li> -->
          <!--
        @if ($active == 'dashbord')
            <li class="active">
        @else
            <li>
        @endif <li>
            <a href="pricing.html">Apoie</a></li> -->
          <li>
        @if ($active == 'contact')
            <li class="active">
        @else
            <li>
        @endif
            <a href="{{route('contact')}}">Contato</a></li>
          <li>
            <a href="https://www.instagram.com/institutovidablumenau/" target="_blank">Instituto Vida</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('enrollment')}}" class="get-started-btn">Inscreva-se</a>

    </div>
  </header><!-- End Header -->