@extends('main')
@section('title','Inicio')
@section('nav')
@include('nav')
@endsection
@section('content')
<div id="index-banner" class="parallax-container principal">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <div class="row">
        <div class="col l12 center">
        <h2>Conoce nuestros productos</h2>
        </div>
      </div>
      <!--<div class="row">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Catalogo digital</a>
      </div>-->
      <br><br>

    </div>
  </div>
  <div class="parallax"><img src="{{asset('images/productos/1.jpg')}}" alt="Unsplashed background img 1"></div>
</div>


<div class="container" id="nosotros">
  <div class="section">
    <h3 class="row center">Nuestro Proceso</h3>
    <!--   Icon Section   -->
    <div class="row">
      <div class="col l3">
        <div class="icon-block center">
          <img src="{{asset('images/productos/productos.png')}}" alt="ingredientes" class="responsive-img">
          <h5 class="center">Ingredientes</h5>
          <p class="light">
            Usando ingredientes naturales de la más alta calidad en el mercado.
          </p>
        </div>
        
      </div>
      <div class="col l2 center">
        <div class="mt-25">
          <span class="icon-plus f"></span>
        </div>
      </div>
      <div class="col l3">
        <div class="icon-block center">
          <img src="{{asset('images/productos/proceso.png')}}" alt="proceso" class="responsive-img">
          <h5 class="center">Proceso</h5>
          <p class="light">
            En nuestro proceso de producción nos encargamos de generar productos de la más alta calidad en el mercado, sin perder el delicioso sabor casero.
          </p>
        </div>
      </div>
      <div class="col l1">
        <div class="mt-25">
          <span class="icon-arrow-right f"></span>
        </div>
      </div>
      <div class="col l3">
        <img src="{{asset('images/productos/resultado.png')}}" alt="resultado" class="responsive-img">
      </div>
    </div>
  </div>
</div>

<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light">"El real sabor de Coeneo"</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="{{asset('images/productos/2.jpg')}}" alt="Unsplashed background img 2"></div>
</div>

<div class="container" id="clientes">
  <div class="section">
    <div class="row">
      <h3 class="center">Línea de Productos</h3>
      <p class="center">Nuentra prioridad es brindar el mejor servicio al cliente.</p>
    </div>
    <div class="row">
      <div class="col l2">

        <img class="responsive-img circle" src="{{asset('images/azteca.jpg')}}" alt="">
      </div>
      <div class="col l3">
        <img class="responsive-img circle" src="{{asset('images/codallos.png')}}" alt="">
      </div>
      <div class="col l3">
        <img class="responsive-img circle" src="{{asset('images/sunny.png')}}" alt="">
      </div>
      <div class="col l3">
        <img class="responsive-img" src="{{asset('images/violeta.jpg')}}" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col l2 offset-l5">
        <img class="responsive-img" src="{{asset('images/zorro.png')}}" alt="">
      </div>
    </div>
  </div>
</div>

<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light">"Nuestros ingredientes son 100% naturales"</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="{{asset('images/productos/3.jpg')}}" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
</div>

<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">

      </div>
    </div>
  </div>
  <div class="parallax"><img src="{{asset('images/productos/4.jpg')}}" alt="Unsplashed background img 3"></div>
</div>
@endsection
