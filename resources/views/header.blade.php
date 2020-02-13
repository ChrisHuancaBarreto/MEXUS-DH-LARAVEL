<nav class="navbar">
    <div class="logo">
      <a class="hvr-wobble-to-bottom-right" href="">MeXus</a>
    </div>
  
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
  
    <div class="navbar-links">
      <ul>
        <ul class="acceder">
          @guest
  
            <div class="dropdown show">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Acceder
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/login">Ingresar</a>
                <a class="dropdown-item" href="/register">Registrarme</a>
              </div>
            </div>
  
          @else 
  
          <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hola, {{ Auth::user()->name }}.
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#"><i class="fas fa-shopping-cart hvr-float"></i> Carrito (0)</a>
              <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt hvr-float"></i> Salir</a>
            </div>
          </div>
  
          @endguest
        </ul>
        <div class="submenu">
          <div class="divider"></div>
          <li><a href="#">Acceder</a></li>
          <div class="divider"></div>
          <li><a href="#"><i class="fas fa-shopping-cart hvr-float"></i> (0)</a></li>
          <div class="divider"></div>
          <li><a href="">Categorias</a></li>
          <div class="divider"></div>
          <li><a href="">Lo más vendido</a></li>
          <div class="divider"></div>
          <li><a href="">OFERTAS</a></li>
          <div class="divider"></div>
          <li><a href="">Ayuda</a></li>
        </div>
      </ul>
    </div>
  </nav>
  
  <div class="menu">
    <ul>
        <li><a href="">Categorias</a></li>
        <li><a href="">Lo más vendido</a></li>
        <li><a href="">OFERTAS</a></li>
        <li><a href="">Ayuda</a></li>
    </ul>
  </div>  
  