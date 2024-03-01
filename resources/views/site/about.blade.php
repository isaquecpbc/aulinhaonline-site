@extends('templates.aulinha.template')

@push('styles')
@endpush

@push('scripts')
@endpush

@section('content')
   
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Sobre a Aulinha</h2>
        <p>A aulinha é um projeto comunitário integrado ao <a href="https://www.instagram.com/institutovidablumenau/" target="_blank">Instituto Vida</a> que recebe a comunidade de faixa-etária de 7 à 19 anos para ensinar música atravéz do amor ao próximo e com os valores e princípios da família. Os professoressão voluntários não remunerados e todos os instrumentos usados na escola são doados.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Enrollment Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Checklist</h2>
          <p>Lembre-se que</p>
        </div>

        <div class="col confirmation-checklist" data-aos="zoom-in" data-aos-delay="100">
            <ul class="px-2">
              <li class="m-0 py-1"><i class="bx bx-checkbox-checked"></i> Nossas aulinhas são todas as segundas-feiras na parte da noite;</a></li>
              <li class="m-0 py-1"><i class="bx bx-checkbox-checked"></i> Cheguesempre 15 minutos antes da sua aulinha começar;</a></li>
              <li class="m-0 py-1"><i class="bx bx-checkbox-checked"></i> Nossa aulinha dura 45 minutos;</a></li>
              <li class="m-0 py-1"><i class="bx bx-checkbox-checked"></i> Se você tiver o seu instrumento pode levar;</a></li>
              <li class="m-0 py-1"><i class="bx bx-checkbox-checked"></i> Temos sempre cafezinho com biz pra ter muita energia na aulinha!</a></li>
              <li class="m-0 py-1"><i class="bx bx-checkbox-checked"></i> Mantenha a sua mensalidade sempre em dia!</a></li>
            </ul>
        </div>

      </div>
    </section><!-- End Enrollment Section -->

@endsection