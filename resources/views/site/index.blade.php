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

                <h3><a href="course-details.html">Violão</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
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

                <h3><a href="course-details.html">Violino</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
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

                <h3><a href="course-details.html">Bateria</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
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

                <h3><a href="course-details.html">Baixo</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
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

                <h3><a href="course-details.html">Teclado</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

@endsection