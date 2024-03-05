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
  
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pagamentos e doações</h2>
        <p>Nossas Contas</p>
      </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 justify-content-center" data-aos="fade-left" data-aos-delay="100">
          <img src="{{URL::asset('assets/img/pix.png')}}" class="m-auto d-flex h-75" alt="pix">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 content">
          <h2>Apoie esse projeto!</h2>
          <hr>
          <h3>Nesta conta, você pode ajudar a muitos projetos e pessoas, veja mais em <a href="https://www.instagram.com/institutovidablumenau/" target="_blank">Instituto Vida</a>.</h3>
          <p class="text-justify">
            Temos como objetivo a promoção da Vida e o resgate dos valores humanos, com a missão de oferecer capacitação e transformação social, através de um local agradável, acolhedor e próprio para o desenvolvimento do individuo e da família.
          </p>
          <hr>
          <p class="fst-italic">
            Banco <strong>085</strong>
          </p>
          <p class="fst-italic">
            Agência <strong>0101-5</strong>
          </p>
          <p class="fst-italic">
            Conta <strong>13561235</strong>
          </p>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

@endsection