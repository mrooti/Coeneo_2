<nav class="white">
  <div class="nav-wrapper container">
    <a id="logo-container" href="#" class="brand-logo mt-5"><img width="130px" src="{{asset('images/logo.png')}}" alt="" class="responsive-img"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#">Inicio</a></li>
      <li><a href="#nosotros">Nosotros</a></li>
      <li><a href="#clientes">Clientes</a></li>
      <li><a href="{!!route('productos')!!}">Productos</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="#">Inicio</a></li>
      <li><a href="#nosotros">Nosotros</a></li>
      <li><a href="#clientes">Clientes</a></li>
      <li><a href="{!!route('productos')!!}">Productos</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
  </div>
</nav>
{{--<a id="logo-container" href="#" class="brand-logo mt-5"><img width="130px" src="{{asset('images/logo.png')}}" alt="" class="responsive-img"></a>--}}