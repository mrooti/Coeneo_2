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
        <h2 class="titulo_1">Un exterior saludable</h2>
        <h2 class="titulo_2">inicia desde el interior</h2>
        </div>
      </div>
      <!--<div class="row">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Catalogo digital</a>
      </div>-->
      <br><br>

    </div>
  </div>
  <div class="parallax"><img src="{{asset('images/p1.jpeg')}}" alt="Unsplashed background img 1"></div>
</div>


<div class="container" id="nosotros">
  <div class="section">
    <h3 class="row center">Nosotros</h3>
    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block center">
          <!--<h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
          -->
          <img class="responsive-img img-50" src="{{asset('images/mision.png')}}" alt="mision">
          <h5 class="center">Misión</h5>
          <p class="light">Elaborar Productos De Harina Y Maíz De La Más Alta Calidad Al Mejor Precio Que Satisfaga Las Necesidades Del Mercado, De Esta Forma, Pueda Gozar De Ricos Alimentos Con Nuestros Productos.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block center">
          <img class="responsive-img img-50" src="{{asset('images/vision.png')}}" alt="vision">
          <h5 class="center">Visión</h5>

          <p class="light">Posicionarnos En El Mercado Como La Mejor Opción En Productos De Harina Y Maíz, Esto Mediante El Mejoramiento Y La Innovación De Nuestros Productos Siempre Basados En Nuestros Valores Como Empresa Familiar.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block center">
          <img class="responsive-img img-50" src="{{asset('images/valores.png')}}" alt="valores">
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
        <h5 class="header col s12 light">"El real sabor de Coeneo"</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="{{asset('images/p4.jpg')}}" alt="Unsplashed background img 2"></div>
</div>

<div class="container" id="clientes">
  <div class="section">
    <div class="row">
      <h3 class="center">Nuestros Clientes</h3>
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
  <div class="parallax"><img src="{{asset('images/p2.jpeg')}}" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
</div>
<div id="map" style="width:100%; height: 400px;">
</div>

<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">

      </div>
    </div>
  </div>
  <div class="parallax"><img src="{{asset('images/p3.jpg')}}" alt="Unsplashed background img 3"></div>
</div>
@endsection
@section('scripts')
  /*var options = [ {selector: '#paso', offset: 50, callback: function(el) { Materialize.toast("This is our ScrollFire Demo!", 1500 ); } }, {selector: '#staggered-test', offset: 205, callback: function(el) { Materialize.toast("Please continue scrolling!", 1500 ); } }, {selector: '#staggered-test', offset: 400, callback: function(el) { Materialize.showStaggeredList($(el)); } }, {selector: '#image-test', offset: 500, callback: function(el) { Materialize.fadeInImage($(el)); } } ]; Materialize.scrollFire(options);*/
@endsection
@section('functions')
  var map;
  var myLatLng={lat: 19.6636661, lng: -101.5264654};
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 17,
      scrollwheel: false,
      draggable: false,
    });
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Productos Alimenticios Coeneo'
    });
  }

@endsection