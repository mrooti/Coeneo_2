<!DOCTYPE html>
<html lang="es">
<head>
	<title>ICDEPAC | @yield('title','Inicio')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
	<link href="https://file.myfontastic.com/p33ryNdn2ug99gf3MgkiUK/icons.css" rel="stylesheet">
</head>
<body>
	<header>
		@yield('nav')
	</header>
	<main>
		<section>
			@include('flash::message')
			@yield('content')
		</section>
	</main>
	<footer class="page-footer teal brown" id="contacto">
	    <div class="container">
	      <div class="row">
	        <div class="col l6 s12">
	          <h5 class="white-text">Productos Alimenicios Coeneo</h5>
	          <p class="grey-text text-lighten-4">Somos una empresa especializada en la producción y venta de productos alimenticios</p>
	        </div>
	        <div class="col l3 s12">
	          <h5 class="white-text">Dirección</h5>
	          <ul>
	            <li><a class="white-text" href="#!">Reforma 225-A </a></li>
	            <li><a class="white-text" href="#!">Col. Centro</a></li>
	            <li><a class="white-text" href="#!">Quiroga, Michoacán de Ocampo</a></li>
	            <li><a class="white-text" href="#!">México</a></li>
	          </ul>
	        </div>
	        <div class="col l3 s12">
	          <h5 class="white-text">Contacto</h5>
	          <ul>
	          	<li>
	            	<button class="btn waves-effect waves-light brown lighten-2 modal-trigger" data-target="mensaje">Escribenos
					    <i class="material-icons right">send</i>
					 </button>
	          	</li>
				<li class="center"></li>
	            <li class="mt-5"><a class="white-text" href="mailto:contacto@productosalimenticioscoeneo.com">ventas@productosalimenticioscoeneo.com</a></li>
	            <li><a class="white-text" href="#!">+52 (454) 354 0206 </a></li>
	          </ul>
	        </div>
	      </div>
	      <div class="row">
	      	<div class="col l6">
	      		<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1672808296373531";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
				<div class="fb-page" data-href="https://www.facebook.com/Productos.Coeneo/" data-tabs="timeline" data-small-header="true" data-width="500" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Productos.Coeneo/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Productos.Coeneo/">Productos Alimenticios Coeneo</a></blockquote></div>
	      	</div>
	      </div>
	    </div>
	    <div class="footer-copyright">
	      <div class="container">
	      <div class="row">
	      	<div class="col l6 left-align">
	      		Made by <a class="brown-text text-lighten-3" href="http://rofuentes.com">RowDev</a>
	      	</div>
	      	<div class="col l6 right-align">
	      		<a href="http://www.facebook.com/icedepac right-align"><i class="icon-facebook" style="color:white;"></i></a>
	      	</div>
	      </div>
	      </div>
	    </div>
	</footer>
	<!-- Inicio - Modal para mensajes -->
	{!! Form::open(['route'=>'contacto', 'method'=>'POST'])!!}
	<div id="mensaje" class="modal">
	   <div class="modal-content">
	      <h4 class="center">¡Dejanos tu mensaje!</h4>
	      <div class="row">
	      	<div class="col l12 input-field">
	      	 	<i class="material-icons prefix">account_circle</i>
	      		{!! Form::label("nombre","Nombre Completo") !!}
	      		{!! Form::text("nombre",null,["class"=>"validate","id"=>"nombre","required"=>"required"]) !!}
	      	</div>
	      </div>
	      <div class="row">
	      	<div class="col l6 input-field">
	      		<i class="material-icons prefix">email</i>
	      		{!! Form::label("email","Correo Electronico") !!}
	      		{!! Form::email("email",null,["class"=>"validate","id"=>"email","required"=>"required"]) !!}
	      	</div>
	      	<div class="col l6 input-field">
	      		<i class="material-icons prefix">phone</i>
	      		{!! Form::label("numero","Teléfono (Opcional)") !!}
	      		{!! Form::number("numero",null,["class"=>"validate","id"=>"numero"]) !!}
	      	</div>
	      </div>
	      <div class="row">
	      	<div class="col l12 input-field">
	      		<i class="material-icons prefix">message</i>
	      		{!! Form::label("cuerpo","Mensaje") !!}
	      		{!! Form::text("cuerpo",null,["class"=>"validate","id"=>"cuerpo","length"=>"120","required"=>"required"]) !!}
	      	</div>
	      </div>
	      <div class="row">
	      	<div class="col l12 center-align offset-l3">
	      		<!--<div class="g-recaptcha" data-sitekey="6LfrFAQTAAAAAGyU2iyBEZ7KAbWoB09_aBbpBNUs"></div>-->
	      	</div>
	      </div>
	      <div class="row">
	      	<div class="col l12 input-field center-align offset-s5">
	      		{!! Form::submit("Enviar",["class"=>"btn waves-effect waves-light brown lighten-2"]) !!}
	      	</div>
	      </div>
	    </div>
	</div>
	{!!Form::close()!!}	
	<!-- Fin - Modal para mensajes -->
	<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
	<script src="{{asset('js/materialize.js')}}"></script>
	<script src="{{asset('js/scripts.js')}}"></script>
	<script src="{{asset('js/init.js')}}"></script>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav({
				 menuWidth: 200, // Default is 300
			      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
			      draggable: true // Choose whether you can drag to open on touch screens
				});
			if($('#flash-overlay-modal')[0]){
				$('#flash-overlay-modal').openModal();   
			}
			$('.modal-trigger').leanModal();
			$('select').material_select();
			//animaciones
			var options = [
			    {selector: '.nosotros', offset: 0, callback: function(){
			      $(".nosotros").removeClass("disable");
			      $('.nosotros').animateCss("fadeIn");
			    } },
			    {selector: '.mision', offset: 20, callback: function(){
			      $(".mision").removeClass("disable");
			      $(".vision").removeClass("disable");
			      $(".valores").removeClass("disable");
			      $('.mision').css("-webkit-animation-delay","0.1s").animateCss("fadeInLeft");
			      $('.vision').css("-webkit-animation-delay","0.3s").animateCss("fadeInLeft");
			      $('.valores').css("-webkit-animation-delay","0.5s").animateCss("fadeInLeft");
			    } },
			    {selector: '.clientes', offset: 200, callback: function(){
			      $(".clientes").removeClass("disable");
			      var time=0;
			      $(".clientes").each(function(){
			          $(this).css("-webkit-animation-delay",time+"s").animateCss("fadeIn");
			          time+=1;
			      });
			    } },
			    {selector: '.slogan2', offset: 200, callback: function(){
			      $(".slogan2").removeClass("disable");
			      $(".slogan2").css("-webkit-animation-delay","2s").animateCss("fadeIn");
			    } }

			  ];
			  Materialize.scrollFire(options);
			  var time=0.1;
			  $(".right.hide-on-med-and-down").children().each(function(){
			    $(this).removeClass("disable");
			    $(this).css("-webkit-animation-delay",time+"s");
			    $(this).animateCss("bounceInDown");
			    time+=0.1;
			  });
			  $(".titulos").removeClass("disable");
			  $(".titulo_1").animateCss("bounceInLeft");
			  $(".titulo_2").animateCss("animated bounceInRight");
			@yield('scripts')
		});
		@yield('functions')
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2fuTztJuaZfSHnRmsfKOWjQQ83OwEPuQ&callback=initMap"
        async defer></script>
</body>
</html>