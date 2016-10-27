<!DOCTYPE html>
<html lang="es">
<head>
	<title>ICDEPAC | @yield('title','Inicio')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
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
	<footer class="page-footer teal">
	    <div class="container">
	      <div class="row">
	        <div class="col l6 s12">
	          <h5 class="white-text">Company Bio</h5>
	          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
	        </div>
	        <div class="col l3 s12">
	          <h5 class="white-text">Settings</h5>
	          <ul>
	            <li><a class="white-text" href="#!">Link 1</a></li>
	            <li><a class="white-text" href="#!">Link 2</a></li>
	            <li><a class="white-text" href="#!">Link 3</a></li>
	            <li><a class="white-text" href="#!">Link 4</a></li>
	          </ul>
	        </div>
	        <div class="col l3 s12">
	          <h5 class="white-text">Connect</h5>
	          <ul>
	            <li><a class="white-text" href="#!">Link 1</a></li>
	            <li><a class="white-text" href="#!">Link 2</a></li>
	            <li><a class="white-text" href="#!">Link 3</a></li>
	            <li><a class="white-text" href="#!">Link 4</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	    <div class="footer-copyright">
	      <div class="container">
	      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
	      </div>
	    </div>
	  </footer>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{asset('js/materialize.js')}}"></script>
	<script src="{{asset('js/init.js')}}"></script>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav({
				 edge: 'right', // Choose the horizontal origin
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
</body>
</html>