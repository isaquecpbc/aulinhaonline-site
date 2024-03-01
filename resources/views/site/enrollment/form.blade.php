@extends('templates.aulinha.template')

@push('styles')
@endpush

@push('scripts')
@endpush

@section('content')
   
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Inscrições</h2>
        <p>Preencha o formulário abaixo para fazer parte dessa grande jornada de aprendizado. Tocar um instrumento não é a coisa mais simples do mundo, mas estaremos todas segundas-feiras em comunidade aprendendo e evoluindo a cada passo e a cada semana. Não perca tempo e se inscreva pois as vagas são limitadas. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    @if(isset($errors) && count($errors) > 0)
    <section id="errors" class="errors">
        <div class="container" data-aos="fade-up">
            <div class="alert alert-danger">
                @foreach( $errors->all() as $error )
                <p>{{$error}}</p>
                @endforeach
            </div>
        </div>
    </section>

@endif

    <!-- ======= Enrollment Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Formulário</h2>
          <p>Inscrição para aulinhas</p>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        </svg>

        <div class="row p-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="alert alert-primary d-flex align-items-center p-3" role="alert">
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <div class="p-0">
                    Todos os cursos tem a mensalidade de $35,00 (Trinta e cinco reais).
                </div>
            </div>
        </div>

        {!! Form::open(['route' => 'enrollment.store', 'class' => 'form', 'files' => true, 'enctype' => 'multipart/form-data']) !!}     
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <label class="form-label"><strong>Vagas disponíveis</strong></label>
            <div class="px-3 mb-1">
                <div class="form-check">
                    {!! Form::radio('course', 'guitar', false, ['id' => 'guitar', 'class' => 'form-check-input']) !!}
                    {!! Form::label('guitar', 'Violão', ['class' => 'form-check-label']) !!}
                </div>
                <div class="form-check">
                    {!! Form::radio('course', 'violin', false, ['id' => 'violin', 'class' => 'form-check-input']) !!}
                    {!! Form::label('violin', 'Violino', ['class' => 'form-check-label']) !!}
                </div>
                <div class="form-check">
                    {!! Form::radio('course', 'drums', false, ['id' => 'drums', 'class' => 'form-check-input']) !!}
                    {!! Form::label('drums', 'Bateria', ['class' => 'form-check-label']) !!}
                </div>
                <div class="form-check">
                    {!! Form::radio('course', 'keyboard', false, ['id' => 'keyboard', 'class' => 'form-check-input']) !!}
                    {!! Form::label('keyboard', 'Teclado', ['class' => 'form-check-label']) !!}
                </div>
                <div class="form-check">
                    {!! Form::radio('course', 'bass', false, ['id' => 'bass', 'class' => 'form-check-input']) !!}
                    {!! Form::label('bass', 'Baixo', ['class' => 'form-check-label']) !!}
                </div>
            </div>
        </div>
        <div class="row mt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="mb-3">
                {!! Form::label('name', 'Aluno(a) (nome completo)', ['class' => 'form-label']) !!}
                {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Examplonildo da Silva', 'aria-label' => 'name']) !!}
            </div>
        </div>
        <div class="row mt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="mb-3">
                {!! Form::label('phone', 'Telefone de contato', ['class' => 'form-label']) !!}
                {!! Form::text('phone', null, ['id' => 'phone', 'class' => 'form-control', 'placeholder' => '(47) 98765-4321', 'aria-label' => 'phone']) !!}
            </div>
        </div>
        <div class="row mt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="mb-3">
                {!! Form::label('email', 'E-mail', ['class' => 'form-label']) !!}
                {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'name@example.com', 'aria-label' => 'email']) !!}
            </div>
        </div>
        <div class="row mt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="mb-3">
                {!! Form::label('birthday', 'Data de nascimento', ['class' => 'form-label']) !!}
                {!! Form::date('birthday', null, ['id' => 'birthday', 'class' => 'form-control', 'aria-label' => 'birthday']) !!}
            </div>
        </div>
        <div class="row mt-2 mb-1" data-aos="zoom-in" data-aos-delay="100">
            <label class="form-label"><strong>Sexo</strong></label>
            <div class="px-3">
                <div class="form-check">
                    {!! Form::radio('gender', 'feminine', false, ['id' => 'feminine', 'class' => 'form-check-input']) !!}
                    {!! Form::label('feminine', 'Feminino', ['class' => 'form-check-label']) !!}
                </div>
                <div class="form-check">
                    {!! Form::radio('gender', 'masculine', false, ['id' => 'masculine', 'class' => 'form-check-input']) !!}
                    {!! Form::label('masculine', 'Masculino', ['class' => 'form-check-label']) !!}
                </div>
                <div class="form-check">
                    {!! Form::radio('gender', 'others', false, ['id' => 'others', 'class' => 'form-check-input']) !!}
                    {!! Form::label('others', 'Não responder', ['class' => 'form-check-label']) !!}
                </div>
            </div>
        </div>
        <div class="row mt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="mb-3">
                {!! Form::label('rg', 'RG', ['class' => 'form-label']) !!}
                {!! Form::text('rg', null, ['id' => 'rg', 'class' => 'form-control', 'placeholder' => '1.222.333', 'aria-label' => 'rg']) !!}
            </div>
        </div>
        <div class="row mt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="mb-3">
                {!! Form::label('cpf', 'CPF', ['class' => 'form-label']) !!}
                {!! Form::text('cpf', null, ['id' => 'cpf', 'class' => 'form-control', 'placeholder' => '111.222.333-44', 'aria-label' => 'cpf']) !!}
            </div>
        </div>
        <div class="row mt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="mb-3">
                {!! Form::label('address', 'Endereço: Rua, Número e Complemento', ['class' => 'form-label']) !!}
                {!! Form::text('address', null, ['id' => 'address', 'class' => 'form-control', 'placeholder' => 'Rua Talnilda, N 55 APT 101', 'aria-label' => 'address']) !!}
            </div>
        </div>
        <div class="row mt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="mb-3">
                {!! Form::label('neighborhood', 'Bairro', ['class' => 'form-label']) !!}
                {!! Form::text('neighborhood', null, ['id' => 'neighborhood', 'class' => 'form-control', 'placeholder' => 'Centro', 'aria-label' => 'neighborhood']) !!}
            </div>
        </div>
        <div class="row mt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="mb-3">
                {!! Form::label('state', 'Cidade e Estado', ['class' => 'form-label']) !!}
                {!! Form::text('state', null, ['id' => 'state', 'class' => 'form-control', 'placeholder' => 'Exemplonau - EX', 'aria-label' => 'state']) !!}
            </div>
        </div>
        <div class="row mt-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="mb-3">
                {!! Form::label('responsible', 'Nome do técnico responsável', ['class' => 'form-label']) !!}
                {!! Form::text('responsible', null, ['id' => 'responsible', 'class' => 'form-control', 'placeholder' => 'Exemplildo da Silva', 'aria-label' => 'responsible']) !!}
            </div>
        </div>
        <div class="row mt-2 mb-1" data-aos="zoom-in" data-aos-delay="100">
            <label class="form-label"><strong>Estou de acordo</strong>:</label>
            <div class="px-3">
            <div class="form-check">
                    {!! Form::checkbox('accordingly', '1', false, ['id' => 'accordingly', 'class' => 'form-check-input']) !!}
                    {!! Form::label('accordingly', 'Estou ciente que o preenchimento desse formulário não me garante de forma automática a vaga pretendida, pois o mesmo será submetido ao processo de encaixe conforme a agenda disponível.', ['class' => 'form-check-label']) !!}
            </div>
            </div>
        </div>
        <div class="row mt-2 mb-1 justify-content-end" data-aos="zoom-in" data-aos-delay="100">
            {!! Form::submit('Enviar', ['class' => 'btn btn-primary btn-w-fluid me-0']) !!}
        </div>
        {!! Form::close() !!}

      </div>
    </section><!-- End Enrollment Section -->

@endsection