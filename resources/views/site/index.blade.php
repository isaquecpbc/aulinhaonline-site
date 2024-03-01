@extends('templates.aulinha.template')

@push('styles')
@endpush

@push('scripts')
@endpush

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Todas segundas-feiras</h1>
            <h2>Cursos com mensalidade simbólica de R$35,00</h2>
            <h2><span>Inscrições abertas de 01/03 á 10/03</span></h2>
            <a href="{{route('courses')}}" class="btn-get-started">Inscrições</a>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Corsos</h2>
          <p>Aulinhas oferecidas</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{URL::asset('assets/img/Violão.png')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Cordas</h4>
                  <p class="price">$35</p>
                </div>

                <h3><a>Violão</a></h3>
                <p>Aprenda a tocar violão usando partituras e cifras, usando escalas de notas e acordes de várias formas.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="{{URL::asset('assets/img/Violino.png')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Cordas</h4>
                  <p class="price">$35</p>
                </div>

                <h3><a>Violino</a></h3>
                <p>Vamos tocar violino através das partituras e aprender de uma forma divertida com escalas e notas para tocar as melhores músicas clássicas!</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{URL::asset('assets/img/Bateria.png')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Percussão</h4>
                  <p class="price">$35</p>
                </div>

                <h3><a>Bateria</a></h3>
                <p>É o instrumento mais legal mesmo, então vamos aprender com partituras e tocar varios ritmos em todos os tempos possíveis.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>
        <div class="row mt-4" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{URL::asset('assets/img/Baixo.png')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Cordas</h4>
                  <p class="price">$35</p>
                </div>

                <h3><a>Baixo</a></h3>
                <p>O que seria das bandas sem o baixo? Um instrumento versátil e facil de aprender, ideal pra quem esta começando ou ja sabe violão.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{URL::asset('assets/img/Teclado.png')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Cordas</h4>
                  <p class="price">$35</p>
                </div>

                <h3><a>Teclado</a></h3>
                <p>Com tantas notas, o teclado é o instrumento ideal para tocar qualquer música, e fazer a harmonia da música ficar ainda mais bonita.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

@endsection