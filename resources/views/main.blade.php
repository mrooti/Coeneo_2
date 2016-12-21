<!DOCTYPE html>
<html lang="es">
<head>
	<title>ICDEPAC | @yield('title','Inicio')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
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
	            <li><a class="white-text" href="mailto:contacto@productosalimenticioscoeneo.com">ventas@productosalimenticioscoeneo.com</a></li>
	            <li><a class="white-text" href="#!">+52 (454) 354 0206 </a></li>
	          </ul>
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
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{asset('js/materialize.js')}}"></script>
	<script src="{{asset('js/init.js')}}"></script>
	<script src="{{asset('js/scripts.js')}}"></script>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav({
				 edge: 'left', // Choose the horizontal origin
				 closeOnClick: true
				});
			if($('#flash-overlay-modal')[0]){
				$('#flash-overlay-modal').openModal();   
			}
			$('.modal-trigger').leanModal();
			$('select').material_select();
			@yield('scripts')
		});
		@yield('functions')
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2fuTztJuaZfSHnRmsfKOWjQQ83OwEPuQ&callback=initMap"
        async defer></script>
</body>
</html>