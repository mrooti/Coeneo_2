@extends('main')
@section('title','Inicio')
@section('nav')
@include('nav')
@endsection
@section('content')
<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h2 class="header center teal-text text-lighten-2">Productos Alimenticios Coeneo</h2>
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <!--<div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
      </div>-->
      <br><br>

    </div>
  </div>
  <div class="parallax"><img src="{{asset('images/p1.jpeg')}}" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
          <h5 class="center">Misión</h5>

          <p class="light">Elaborar Productos De Harina Y Maíz De La Más Alta Calidad Al Mejor Precio Que Satisfaga Las Necesidades Del Mercado, De Esta Forma, Pueda Gozar De Ricos Alimentos Con Nuestros Productos.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">group</i></h2>
          <h5 class="center">Visión</h5>

          <p class="light">Posicionarnos En El Mercado Como La Mejor Opción En Productos De Harina Y Maíz, Esto Mediante El Mejoramiento Y La Innovación De Nuestros Productos Siempre Basados En Nuestros Valores Como Empresa Familiar.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
          <h5 class="center">Valores</h5>

          <p class="light">Familia, trabajo en equipo, respeto, honestidad, tolerancia, paciencia y comunicación.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="{{asset('images/p2.jpeg')}}" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
  <div class="section">

    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h4>Contactanos</h4>
        {!! Form::open(['route'=>'contacto', 'method'=>'POST', 'id'=>'form']) !!}
            <div class="row">
              <div class="col l4">
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    {!! Form::label('nombre','Nombre') !!}
                    {!! Form::text('nombre', null, ['class'=>'validate','required']) !!}
                </div>  
              </div>
              <div class="col l4">
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    {!! Form::label('correo','Correo') !!}
                    {!! Form::text('correo', null, ['class'=>'validate','required']) !!}
                </div>
              </div>
              <div class="col l4">
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    {!! Form::label('mensaje','Mensaje') !!}
                    {!! Form::textArea('mensaje', null, ['class'=>'validate','required']) !!}
                </div>
              </div>
            </div>
        {!! Form::close() !!}
      </div>
    </div>

  </div>
</div>


<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="{{asset('images/p3.jpg')}}" alt="Unsplashed background img 3"></div>
</div>
@endsection