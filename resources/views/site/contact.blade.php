@extends('templates.aulinha.template')

@push('styles')
@endpush

@push('scripts')
@endpush

@section('content')
   
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Contato</h2>
        <p>A aulinha é um projeto comunitário integrado ao <a href="https://www.instagram.com/institutovidablumenau/" target="_blank">Instituto Vida</a> que recebe a comunidade de faixa-etária de 7 à 19 anos para ensinar música atravéz do amor ao próximo e com os valores e princípios da família. Os professoressão voluntários não remunerados e todos os instrumentos usados na escola são doados.</p>
      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14231.812026923935!2d-49.10854448537097!3d-26.90498647665169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df1ec8c0ff563f%3A0xf8a56a3ea19931ed!2sPrimeira%20Igreja%20Batista%20Pioneira%20em%20Blumenau!5e0!3m2!1spt-BR!2sbr!4v1709274057355!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">
        <div class="row mt-5 d-flex align-items-start">
            <div class="col-lg-4 col-md-4 col-sm-12 my-4 align-self-start">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Local:</h4>
                        <p class="w-75">R. Benjamin Constant, 2080 - Escola Agrícola, Blumenau - SC</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 my-4 align-self-start">
                <div class="info">
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>E-mail:</h4>
                        <p>contato@aulinha.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 my-4 align-self-start">
                <div class="info">
                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Telefone:</h4>
                        <p><a href="https://api.whatsapp.com/send?phone=5547991506381&text=Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20da%20aulinha%20de%20musica">+55 47 99150 6381</a></p>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </section><!-- End Contact Section -->


@endsection