<nav class="white">
  <div class="nav-wrapper container">
    <a id="logo-container" href="#" class="brand-logo mt-5"><img width="130px" src="{{asset('images/logo.png')}}" alt="" class="responsive-img"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{!!route('index')!!}">Inicio</a></li>
      <li><a href="{!!route('index')!!}#nosotros">Nosotros</a></li>
      <li><a href="{!!route('index')!!}#clientes">Clientes</a></li>
      <li><a href="#">Productos</a></li>
      <li><a href="{!!route('index')!!}#contacto">Contacto</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="{!!route('index')!!}">Inicio</a></li>
      <li><a href="{!!route('index')!!}#nosotros">Nosotros</a></li>
      <li><a href="{!!route('index')!!}#clientes">Clientes</a></li>
      <li><a href="#">Productos</a></li>
      <li><a href="{!!route('index')!!}#contacto">Contacto</a></li>
    </ul>
  </div>
</nav>